<?php
// Copyright (C) 2012-2020 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Module email-reply
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
/**
 * To trigger notifications when a ticket is updated from the portal
 */

class TriggerOnLogUpdate extends TriggerOnObject
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "grant_by_profile,core/cmdb,application",
			"key_type" => "autoincrement",
			"name_attcode" => "description",
			"state_attcode" => "",
			"reconc_keys" => array('description'),
			"db_table" => "priv_trigger_onlogupdate",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
			"display_template" => "",
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();

		MetaModel::Init_AddAttribute(new AttributeString("target_log", array("allowed_values"=>null, "sql"=>"target_log", "default_value"=>'public_log', "is_null_allowed"=>false, "depends_on"=>array())));

		// Display lists
		MetaModel::Init_SetZListItems('details', array('description', 'target_class', 'filter', 'target_log', 'action_list')); // Attributes to be displayed for the complete details
		MetaModel::Init_SetZListItems('list', array('finalclass', 'target_class', 'target_log', 'description')); // Attributes to be displayed for a list
		// Search criteria
	}
}
// Add class definitions here

// Add menus creation here

// Declare a class that implements iBackgroundProcess (will be called by the cron)
// Extend the class AsyncTask to create a queue of asynchronous tasks (process by the cron)
// Declare a class that implements iApplicationUIExtension (to tune object display and edition form)
// Declare a class that implements iApplicationObjectExtension (to tune object read/write rules)

class EmailReplyPlugIn implements iApplicationUIExtension, iApplicationObjectExtension
{
	const XML_LEGACY_VERSION = '1.7';

	/**
	 * Compare static::XML_LEGACY_VERSION with ITOP_DESIGN_LATEST_VERSION and returns true if the later is <= to the former.
	 * If static::XML_LEGACY_VERSION, return false
	 *
	 * @return bool
	 *
	 * @since 1.3.0
	 */
	public static function UseLegacy(){
		return static::XML_LEGACY_VERSION !== '' ? version_compare(ITOP_DESIGN_LATEST_VERSION, static::XML_LEGACY_VERSION, '<=') : false;
	}
	
	public function OnDisplayProperties($oObject, WebPage $oPage, $bEditMode = false)
	{
		$bIsLegacy = static::UseLegacy();
		$sIsLegacy = $bIsLegacy === true ? 'true' : 'false';

		if (($bEditMode || !$bIsLegacy) && !$oObject->IsNew())
		{
			$bEnabled = (bool) MetaModel::GetModuleSetting('email-reply', 'enabled_default', true);
			$sChecked = $bEnabled ? 'checked' : '';

			if($bEditMode){
				$oPage->add_ready_script("$('#form_2').append('<div id=\"emry_form_extension\"></div>');");
			}
			foreach ($this->ListTargetCaseLogs($oObject) as $sAttCode => $aTriggers)
			{
				$sModuleUrl = utils::GetAbsoluteUrlModulesRoot().'email-reply/';
				$oPage->add_ready_script("IsEmailReplyLegacy = $sIsLegacy;");
				$oPage->add_linked_script($sModuleUrl.'email-reply.js');
				
				$oPage->add_dict_entry('UI-emry-enable');
				$oPage->add_dict_entry('UI-emry-noattachment');
				$oPage->add_dict_entry('UI-emry-caselog-prompt');
				$oPage->add_dict_entry('UI-emry-select-attachments');
				$oPage->add_dict_entry('UI-emry-attachments-to-be-sent');
				$oPage->add_dict_entry('UI:Button:Ok');
				$oPage->add_dict_entry('UI:Button:Cancel');
				
				$sObjClass = get_class($oObject);
				$iObjKey = $oObject->GetKey();
				$sJSMethod = addslashes("EmailReplySelectAttachments('$sAttCode')");
				$sCheckboxLabel = htmlentities(Dict::S('UI-emry-enable'), ENT_QUOTES, 'UTF-8');
				$sBtnLabel = htmlentities(Dict::S('UI-emry-select-attachments'), ENT_QUOTES, 'UTF-8');
				$sBtnTooltip = htmlentities(Dict::S('UI-emry-select-attachments-tooltip'), ENT_QUOTES, 'UTF-8');
				if($bIsLegacy){
					$oPage->add_ready_script(
						<<<JS
$('#field_2_$sAttCode div.caselog_input_header').html('<label><input type="checkbox" $sChecked id="emry_enabled_$sAttCode" name="emry_enabled[$sAttCode]" value="yes">$sCheckboxLabel</label><span id="emry_event_bus_$sAttCode">&nbsp;</span><span id="emry_file_list_$sAttCode" style="display: inline-block;"><img src="{$sModuleUrl}paper_clip.png">&nbsp;(<span id="emry_file_count_$sAttCode">0</span>) <button type="button" id="emry_select_files_btn_$sAttCode" onclick="$sJSMethod">$sBtnLabel</button></span>');
if($.isFunction($.fn.datepicker)) {
	$('#emry_file_list_$sAttCode').tooltip({content: function() { return EmailReplyTooltipContent('$sAttCode'); } });
	$('#emry_select_files_btn_$sAttCode').tooltip({show: { delay: 1000 }, content: '<span style="font-size:12px;">$sBtnTooltip</span>'});
}
JS
					);

				}
				else{
					if(!$bEditMode){
						$oPage->add_ready_script("$('[data-role=\"ibo-caselog-entry-form\"][data-attribute-code=\"$sAttCode\"] [data-role=\"ibo-caselog-entry-form--extra-inputs\"]').append('<div id=\"emry_form_extension\"></div>');");
					}
					$oPage->add_saas('env-'.utils::GetCurrentEnvironment().'/email-reply/css/style.scss');
					$sCheckboxTooltip = $sCheckboxLabel;
					$sCheckboxLabel = htmlentities(Dict::S('UI-emry-enable:Short'), ENT_QUOTES, 'UTF-8');
					$sBtnLabel = htmlentities(Dict::S('UI-emry-select-attachments:Short'), ENT_QUOTES, 'UTF-8');;
					$oPage->add_ready_script(
						<<<JS
$('[data-role=\"ibo-caselog-entry-form\"][data-attribute-code=\"$sAttCode\"] [data-role=\"ibo-caselog-entry-form--action-buttons--extra-actions\"]').append('<label><div class="emry-notify-input--wrapper ibo-button ibo-is-alternative ibo-is-neutral" data-tooltip-content="$sCheckboxTooltip"><input type="checkbox" $sChecked id="emry_enabled_toggler_$sAttCode" onChange="$(\'#emry_enabled_$sAttCode\').val(this.checked === true ? \'yes\' : \'no\')"/>$sCheckboxLabel</div></label></div><span id="emry_event_bus_$sAttCode"></span><span id="emry_file_list_$sAttCode" style="display: inline-block;"><button type="button" class="emry-button ibo-button ibo-is-regular ibo-is-neutral" id="emry_select_files_btn_$sAttCode" onclick="$sJSMethod"><span class="ibo-button--icon fas fa-paperclip"></span><span class=\"ibo-button--label\"><span id="emry_file_count_$sAttCode">0</span></span></button></span>');
$('#emry_form_extension').append('<input type="checkbox" $sChecked id="emry_enabled_$sAttCode" name="emry_enabled[$sAttCode]" value="yes" style="display:none">');
$('#emry_file_list_$sAttCode').attr('data-tooltip-content', '$sBtnTooltip');
CombodoTooltip.InitTooltipFromMarkup($('.emry-notify-input--wrapper'), true);
CombodoTooltip.InitTooltipFromMarkup($('#emry_file_list_$sAttCode'), true);
JS
					);
				}
				$oPage->add_ready_script(
<<<JS
$('#field_2_$sAttCode textarea').attr('placeholder', Dict.S('UI-emry-caselog-prompt'));
$('#emry_event_bus_$sAttCode').bind('add_blob', function(event, sContainerClass, sContainerId, sBlobAttCode, sFileName) {
	EmailReplyAddFile('$sAttCode', sContainerClass, sContainerId, sBlobAttCode, sFileName, true);
} );
$('#attachment_plugin').bind('add_attachment', function(event, attId, sAttName, bInlineImage) {
	EmailReplyAddFile('$sAttCode', 'Attachment', attId, 'contents', sAttName, (bInlineImage == false)); // bInlineImage = true, false (or undefined for backward compatibility)
} );
$('#attachment_plugin').bind('remove_attachment', function(event, attId, sAttName) {
	EmailReplyRemoveFile('$sAttCode', 'Attachment', attId, 'contents');
} );
$('#emry_enabled_$sAttCode').bind('click', function(event) {
	EmailReplyUpdateFileCount('$sAttCode');
} );
JS
				);
				
				// Add all existing attachments to the list of potentially select-able attachments
				$oSearch = DBObjectSearch::FromOQL("SELECT Attachment WHERE (item_class = :class AND item_id = :item_id)");
				$oSet = new DBObjectSet($oSearch, array(), array('class' => $sObjClass, 'item_id' => $iObjKey));
				while ($oAttachment = $oSet->Fetch())
				{
					$iAttId = $oAttachment->GetKey();
					$oDoc = $oAttachment->Get('contents');
					$sFileName = $oDoc->GetFileName();
					$oPage->add_ready_script("EmailReplyAddFile('$sAttCode', 'Attachment', ".$oAttachment->GetKey().", 'contents', '".addslashes($sFileName)."', false);"); // false => not checked by default
				}
				
				// Align the checkbox with the label... cross-browser !
				$oPage->add_style(
<<<CSS
input {
    vertical-align: middle;
}
div.caselog_input_header img {
    vertical-align: middle;
}
CSS
				);
			}
		}
	}

	public function OnDisplayRelations($oObject, WebPage $oPage, $bEditMode = false)
	{
	}

	protected static $aHasFormSubmit = array();

	public function OnFormSubmit($oObject, $sFormPrefix = '')
	{
		self::$aHasFormSubmit[get_class($oObject)][$oObject->GetKey()] = true;
	}
	
	public function OnFormCancel($sTempId)
	{
	}

	public function EnumUsedAttributes($oObject)
	{
		return array();
	}

	public function GetIcon($oObject)
	{
		return '';
	}

	public function GetHilightClass($oObject)
	{
		// Possible return values are:
		// HILIGHT_CLASS_CRITICAL, HILIGHT_CLASS_WARNING, HILIGHT_CLASS_OK, HILIGHT_CLASS_NONE	
		return HILIGHT_CLASS_NONE;
	}

	public function EnumAllowedActions(DBObjectSet $oSet)
	{
		// No action
		return array();
    }

	public function OnIsModified($oObject)
	{
		return false;
	}

	public function OnCheckToWrite($oObject)
	{
		return array();
	}

	public function OnCheckToDelete($oObject)
	{
		return array();
	}

	public function OnDBUpdate($oObject, $oChange = null)
	{
		$this->HandleTriggers($oObject);
	}
	
	public function OnDBInsert($oObject, $oChange = null)
	{
		$this->HandleTriggers($oObject);
	}
	
	public function OnDBDelete($oObject, $oChange = null)
	{	
	}

	///////////////////////////////////////////////////////////////////////////////////////////////////////
	//
	// Plug-ins specific functions
	//
	///////////////////////////////////////////////////////////////////////////////////////////////////////
	
	/**
	 * Helper to determine the case logs for the given class
	 * Conditions:
	 *  1) There is at least one trigger "on log update" for this class
	 *  2) 	 	 	 	
	 */	
	protected function ListTargetCaseLogs($oObject)
	{
		$sClass = get_class($oObject);

		static $aTargets = array();
		if (!isset($aTargets[$sClass]))
		{
			$aTargets[$sClass] = array();

			// Optimization: check if the class has a case log. If not... do not perform any query
			$bHasCaseLog = false;
			foreach (MetaModel::ListAttributeDefs($sClass) as $sAttCode => $oAttDef)
			{
				if ($oAttDef instanceof AttributeCaseLog)
				{
					$bHasCaseLog = true;
					break;
				}
			}

			if ($bHasCaseLog)
			{
				$aParams = array('class_list' => MetaModel::EnumParentClasses($sClass, ENUM_PARENT_CLASSES_ALL));
				$oTriggerSet = new CMDBObjectSet(DBObjectSearch::FromOQL("SELECT TriggerOnLogUpdate AS T WHERE T.target_class IN (:class_list)"), array(), $aParams);
				while ($oTrigger = $oTriggerSet->Fetch())
				{
					$bHasActiveEmailAction = false;
					$oActionList = $oTrigger->Get('action_list');
					while ($oLink = $oActionList->Fetch())
					{
						$iActionId = $oLink->Get('action_id');
						$oAction = MetaModel::GetObject('Action', $iActionId);
						if (($oAction instanceof ActionEmail) && $oAction->IsActive())
						{
							$bHasActiveEmailAction = true;
							break;
						}
					}
	
					if ($bHasActiveEmailAction)
					{
						$aTargets[$sClass][$oTrigger->Get('target_log')][] = $oTrigger;
					}
				}
			}
		}

		return $aTargets[$sClass];
	}

	/**
	 * Helper to execute the triggers, if any
	 * This code cannot be executed while the form is being submitted because the object is not recorded
	 * and it is sometimes required to have the object already recorded (eg: send a notification to the persons attached to the object)	 	 
	 */	 
	protected function HandleTriggers($oObject)
	{
		if (isset(self::$aHasFormSubmit[get_class($oObject)][$oObject->GetKey()]))
		{
			// Do it once and only once!
			unset(self::$aHasFormSubmit[get_class($oObject)][$oObject->GetKey()]);

			$aCaseLogs = $this->ListTargetCaseLogs($oObject);
			if (count($aCaseLogs) > 0)
			{
				$aOperations = utils::ReadPostedParam('emry_enabled', array());
				$aTriggerContext = $oObject->ToArgs('this');
		
				foreach ($aCaseLogs as $sAttCode => $aTriggers)
				{
					$sOperation = isset($aOperations[$sAttCode]) ? $aOperations[$sAttCode] : 'no';
					// Retrieve log data in edit mode
					$sLog = utils::ReadPostedParam('attr_'.$sAttCode, null, 'raw_data');
					// If it's null or empty, tries to fallback on quick-edit
					if(empty($sLog) && !static::UseLegacy()){
						$aQuickEditEntries = utils::ReadPostedParam('entries', [], utils::ENUM_SANITIZATION_FILTER_RAW_DATA);
						if(isset($aQuickEditEntries[$sAttCode])){
							$sLog = $aQuickEditEntries[$sAttCode];
						}
					}
					if (($sOperation === 'yes') && !empty($sLog))
					{
						$aFileDefs = utils::ReadParam('emry_files_'.$sAttCode, array(), false, 'raw_data');
						unset($aTriggerContext['attachments']); 
						if (count($aFileDefs) > 0)
						{
							$aFiles = array();
							foreach($aFileDefs as $sFileDef)
							{
								// Forward attachments into the pipe (via the context of the trigger)
								$aMatches = array();
								if (preg_match('|^(.+)::(.+)/(.+)$|', $sFileDef, $aMatches))
								{
									$sContainerClass = $aMatches[1];
									$sContainerId = $aMatches[2];
									$sBlobAttCode = $aMatches[3];
									$oContainer = MetaModel::GetObject($sContainerClass, $sContainerId, false);
									if ($oContainer) // defensive programming
									{
										$oFile = $oContainer->Get($sBlobAttCode);
									}
									$aFiles[] = $oFile;
								}
							}
							$aTriggerContext['attachments'] = $aFiles;
						}
	
						$aTriggerContext['case-log-reply'] = $sLog;
						foreach ($aTriggers as $oTrigger)
						{
							$oTrigger->DoActivate($aTriggerContext);
						}
					}
				}
			}
		}
	}
}
