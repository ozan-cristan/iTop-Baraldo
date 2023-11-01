<?php
// Copyright (C) 2010 Combodo SARL
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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */
//
// Class: CoverageWindow
//
Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:CoverageWindows' => 'Heures Ouvrées',
	'Menu:CoverageWindows+' => 'Toutes les Heures Ouvrées',
	'Class:CoverageWindow' => 'Heures Ouvrées',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Nom',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Description',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Usual name~~',
	'Class:CoverageWindow/Attribute:friendlyname+' => '~~',
	'Class:CoverageWindow/Attribute:interval_list' => 'Heures Ouvrées',
	'WorkingHoursInterval:StartTime' => 'Heure de début:',
	'WorkingHoursInterval:EndTime' => 'Heure de fin:',
	'WorkingHoursInterval:WholeDay' => 'Journée complète:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Supprimer l\'intervalle',
	'WorkingHoursInterval:DlgTitle' => 'Edition de l\'intervalle',
	'Class:CoverageWindowInterval' => 'Intervalle d\'heures ouvrées',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Heures Ouvrées',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Jour de la semaine',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Dimanche',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Lundi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Mardi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Mercredi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Jeudi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Vendredi',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Samedi',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Heure de début',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Heure de fin',
	
));

Dict::Add('FR FR', 'French', 'Français', array(
	'CoverageWindow:Error:MissingIntervalList' => 'Les Heures Ouvrées doivent être spécifiées',
));

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Jours Fériés',
	'Menu:Holidays+' => 'Tous les Jours Fériés',
	'Class:Holiday' => 'Jour Férié',
	'Class:Holiday+' => 'Un jour non travaillé',
	'Class:Holiday/Attribute:name' => 'Nom',
	'Class:Holiday/Attribute:date' => 'Date',
	'Class:Holiday/Attribute:calendar_id' => 'Calendrier',
	'Class:Holiday/Attribute:calendar_id+' => 'Le calendrier (optional) auquel est rattaché ce jour férié',
	'Coverage:Description' => 'Description',	
	'Coverage:StartTime' => 'Heures de début',	
	'Coverage:EndTime' => 'Heures de fin',

));


Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Calendriers des Jours Fériés',
	'Menu:HolidayCalendars+' => 'Tous les Calendriers des Jours Fériés',
	'Class:HolidayCalendar' => 'Calendrier des Jours Fériés',
	'Class:HolidayCalendar+' => 'Un groupe de jours fériés',
	'Class:HolidayCalendar/Attribute:name' => 'Nom',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Jours Fériés',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
));

//
// Class: Holiday
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
));
