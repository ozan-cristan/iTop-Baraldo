<?php
// Copyright (C) 2010-2018 Combodo SARL
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
Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Menu:CoverageWindows' => 'Ventana de Cobertura',
	'Menu:CoverageWindows+' => 'Todas las Ventanas de Cobertura',
	'Class:CoverageWindow' => 'Ventana de Cobertura',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Nombre',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Descripción',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nombre Común',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Horas abiertas',
	'WorkingHoursInterval:StartTime' => 'Tiempo Inicio:',
	'WorkingHoursInterval:EndTime' => 'Tiempo Final:',
	'WorkingHoursInterval:WholeDay' => 'Todo el Día:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remover Intervalo',
	'WorkingHoursInterval:DlgTitle' => 'Edición de intervalo de horas abiertas',
	'Class:CoverageWindowInterval' => 'Intervalo de Horas Abiertas',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Ventana de Cobertura',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Días de la Semana',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Domingo',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Lunes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Martes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Miércoles',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Jueves',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Viernes',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Sábado',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Tiempo Inicio',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Tiempo Final',
	
));

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'CoverageWindow:Error:MissingIntervalList' => 'Open Hours have to be specified~~',
));

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Festivos',
	'Menu:Holidays+' => 'Todos los Festivos',
	'Class:Holiday' => 'Festivo',
	'Class:Holiday+' => 'Día no laborable',
	'Class:Holiday/Attribute:name' => 'Nombre',
	'Class:Holiday/Attribute:date' => 'Fecha',
	'Class:Holiday/Attribute:calendar_id' => 'Calendario',
	'Class:Holiday/Attribute:calendar_id+' => 'El calendario al cual el día festivo está relacionado (si hay alguno)',
	'Coverage:Description' => 'Descripción',	
	'Coverage:StartTime' => 'Tiempo Inicio',	
	'Coverage:EndTime' => 'Tiempo Final',

));


Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Calendario de Festivos',
	'Menu:HolidayCalendars+' => 'Todos los Calendarios de Festivos',
	'Class:HolidayCalendar' => 'Calendario de Festivos',
	'Class:HolidayCalendar+' => 'Un grupo de festividades a los que otros objetos pueden estar relacionados',
	'Class:HolidayCalendar/Attribute:name' => 'Nombre',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Festivos',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
));

//
// Class: Holiday
//

Dict::Add('ES CR', 'Spanish', 'Español, Castellano', array(
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
));
