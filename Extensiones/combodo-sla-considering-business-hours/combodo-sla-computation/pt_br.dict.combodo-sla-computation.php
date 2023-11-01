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
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Menu:CoverageWindows' => 'Janelas de Cobertura',
	'Menu:CoverageWindows+' => 'Todas as janelas de cobertura',
	'Class:CoverageWindow' => 'Janela de Cobertura',
	'Class:CoverageWindow+' => '',
	'Class:CoverageWindow/Attribute:name' => 'Nome',
	'Class:CoverageWindow/Attribute:name+' => '',
	'Class:CoverageWindow/Attribute:description' => 'Descrição',
	'Class:CoverageWindow/Attribute:description+' => '',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Nome usual',
	'Class:CoverageWindow/Attribute:friendlyname+' => '',
	'Class:CoverageWindow/Attribute:interval_list' => 'Horário de funcionamento',
	'WorkingHoursInterval:StartTime' => 'Hora de início:',
	'WorkingHoursInterval:EndTime' => 'Hora de término:',
	'WorkingHoursInterval:WholeDay' => 'Dia inteiro:',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Remover intervalo',
	'WorkingHoursInterval:DlgTitle' => 'Edição de intervalo de horário de funcionamento',
	'Class:CoverageWindowInterval' => 'Intervalo horário de funcionamento',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Janela de cobertura',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'Dias da semana',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Domingo',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Segunda',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Terça',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Quarta',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Quinta',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Sexta',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Sábado',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Hora de início',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Hora de término',
	
));

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'CoverageWindow:Error:MissingIntervalList' => 'Open Hours have to be specified~~',
));

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Feriados',
	'Menu:Holidays+' => 'Todos feriados',
	'Class:Holiday' => 'Feriado',
	'Class:Holiday+' => 'Um dia não útil',
	'Class:Holiday/Attribute:name' => 'Nome',
	'Class:Holiday/Attribute:date' => 'Data',
	'Class:Holiday/Attribute:calendar_id' => 'Calendário',
	'Class:Holiday/Attribute:calendar_id+' => 'O calendário ao qual este feriado está relacionado (se houver)',
	'Coverage:Description' => 'Descrição',	
	'Coverage:StartTime' => 'Hora de início',	
	'Coverage:EndTime' => 'Hora de término',

));


Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Calendário de feriados',
	'Menu:HolidayCalendars+' => 'Todos os calendários de feriados',
	'Class:HolidayCalendar' => 'Calendário de feriado',
	'Class:HolidayCalendar+' => 'Um grupo de feriados aos quais outros objetos podem se relacionar',
	'Class:HolidayCalendar/Attribute:name' => 'Nome',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Feriados',
));

//
// Class: CoverageWindowInterval
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:CoverageWindowInterval/Attribute:coverage_window_name' => 'Coverage window name~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_name+' => '~~',
));

//
// Class: Holiday
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Holiday/Attribute:calendar_name' => 'Calendar name~~',
	'Class:Holiday/Attribute:calendar_name+' => '~~',
));
