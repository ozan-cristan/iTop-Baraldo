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
Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Menu:CoverageWindows' => 'Zeitfenster',
	'Menu:CoverageWindows+' => 'Alle Zeitfenster',
	'Class:CoverageWindow' => 'Zeitfenster',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Name',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Beschreibung',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Bezeichnung',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Servicezeiten',
	'WorkingHoursInterval:StartTime' => 'Startzeit:',
	'WorkingHoursInterval:EndTime' => 'Endzeit:',
	'WorkingHoursInterval:WholeDay' => 'Ganztags:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Zeitinterval löschen',
	'WorkingHoursInterval:DlgTitle' => 'Servicezeitinterval bearbeiten',
	'Class:CoverageWindowInterval' => 'Servicezeitinterval',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Zeitfenster',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Wochentag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Sonntag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Montag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Dienstag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Mittwoch',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Donnerstag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Freitag',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Samstag',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Startzeit',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Endzeit',
	
));

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'CoverageWindow:Error:MissingIntervalList' => 'Die Geschäftszeiten müssen definiert werden.',
));

Dict::Add('DE DE', 'German', 'Deutsch', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Feiertage',
	'Menu:Holidays+' => 'Alle Feiertage',
	'Class:Holiday' => 'Feiertag',
	'Class:Holiday+' => 'Ein arbeitsfreier Tag',
	'Class:Holiday/Attribute:name' => 'Name',
	'Class:Holiday/Attribute:date' => 'Datum',
	'Class:Holiday/Attribute:calendar_id' => 'Kalender',
	'Class:Holiday/Attribute:calendar_id+' => 'Der Kalender (falls vorhanden), auf den sich dieser Feiertag bezieht',
	'Coverage:Description' => 'Beschreibung',	
	'Coverage:StartTime' => 'Beginn (Zeit)',	
	'Coverage:EndTime' => 'Ende (Zeit)',

));


Dict::Add('DE DE', 'German', 'Deutsch', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Feiertagskalender',
	'Menu:HolidayCalendars+' => 'Alle Feiertagskalender',
	'Class:HolidayCalendar' => 'Feiertagskalender',
	'Class:HolidayCalendar+' => 'Eine Gruppe von Feiertagen, zu denen andere Objekte in Beziehung stehen können',
	'Class:HolidayCalendar/Attribute:name' => 'Name',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Feiertage',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Zeitfenstername',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '',
));

//
// Class: Holiday
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
	'Class:Holiday/Attribute:calendar_name' => 'Kalendername',
	'Class:Holiday/Attribute:calendar_name+' => '',
));
