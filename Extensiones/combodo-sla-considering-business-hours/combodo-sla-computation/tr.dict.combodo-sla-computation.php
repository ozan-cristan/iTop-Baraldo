<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
//
// Class: CoverageWindow
//
Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Menu:CoverageWindows' => 'Coverage Windows~~',
	'Menu:CoverageWindows+' => 'All Coverage Windows~~',
	'Class:CoverageWindow' => 'Coverage Window~~',
	'Class:CoverageWindow+' => '~~',
	'Class:CoverageWindow/Attribute:name' => 'Name~~',
	'Class:CoverageWindow/Attribute:name+' => '~~',
	'Class:CoverageWindow/Attribute:description' => 'Description~~',
	'Class:CoverageWindow/Attribute:description+' => '~~',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Usual name~~',
	'Class:CoverageWindow/Attribute:friendlyname+' => '~~',
	'Class:CoverageWindow/Attribute:interval_list' => 'Open Hours~~',
	'WorkingHoursInterval:StartTime' => 'Start Time:~~',
	'WorkingHoursInterval:EndTime' => 'End Time:~~',
	'WorkingHoursInterval:WholeDay' => 'Whole Day:~~',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remove Interval~~',
	'WorkingHoursInterval:DlgTitle' => 'Open hours interval edition~~',
	'Class:CoverageWindowInterval' => 'Open hours Interval~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Coverage Window~~',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Day of the week~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Sunday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Monday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Tuesday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Wednesday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Thursday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Friday~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Saturday~~',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Start Time~~',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'End Time~~',
	
));

Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'CoverageWindow:Error:MissingIntervalList' => 'Open Hours have to be specified~~',
));

Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Holidays~~',
	'Menu:Holidays+' => 'All Holidays~~',
	'Class:Holiday' => 'Holiday~~',
	'Class:Holiday+' => 'A non working day~~',
	'Class:Holiday/Attribute:name' => 'Name~~',
	'Class:Holiday/Attribute:date' => 'Date~~',
	'Class:Holiday/Attribute:calendar_id' => 'Calendar~~',
	'Class:Holiday/Attribute:calendar_id+' => 'The calendar to which this holiday is related (if any)~~',
	'Coverage:Description' => 'Description~~',	
	'Coverage:StartTime' => 'Start Time~~',	
	'Coverage:EndTime' => 'End Time~~',

));


Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Holiday Calendars~~',
	'Menu:HolidayCalendars+' => 'All Holiday Calendars~~',
	'Class:HolidayCalendar' => 'Holiday Calendar~~',
	'Class:HolidayCalendar+' => 'A group of holidays that other objects can relate to~~',
	'Class:HolidayCalendar/Attribute:name' => 'Name~~',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Holidays~~',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
));

//
// Class: Holiday
//

Dict::Add('TR TR', 'Turkish', 'Türkçe', array(
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
));
