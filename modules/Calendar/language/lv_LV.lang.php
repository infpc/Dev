<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_list_strings = array (
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Jan',
    2 => 'Feb',
    3 => 'Mar',
    4 => 'Apr',
    5 => 'Mai',
    6 => 'Jūn',
    7 => 'Jūl',
    8 => 'Aug',
    9 => 'Sep',
    10 => 'Okt',
    11 => 'Nov',
    12 => 'Dec',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Janvāris',
    2 => 'Februāris',
    3 => 'Marts',
    4 => 'Aprīlis',
    5 => 'Maijs',
    6 => 'Jūnijs',
    7 => 'Jūlijs',
    8 => 'Augusts',
    9 => 'Septembris',
    10 => 'Oktobris',
    11 => 'Novembris',
    12 => 'Decembris',
  ),
  'dom_cal_weekdays' => 
  array (
    0 => 'Sv.',
    1 => 'P',
    2 => 'O',
    3 => 'T',
    4 => 'C',
    5 => 'Pk',
    6 => 'Se',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Svētdiena',
    1 => 'Pirmdiena',
    2 => 'Otrdiena',
    3 => 'Trešdiena',
    4 => 'Ceturtdiena',
    5 => 'Piektdiena',
    6 => 'Sestdiena',
  ),
);

$mod_strings = array (
  'LBL_AM' => 'Rīts',
  'LBL_APPLY_BUTTON' => 'Apstiprināt',
  'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
  'LBL_BUSY' => 'Aizņemts',
  'LBL_CANCEL_BUTTON' => 'Atcelt',
  'LBL_CLOSE_BUTTON' => 'Aizvērt',
  'LBL_CONFIRM_REMOVE' => 'Vai tiešām vēlaties noņemt ierakstu?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Vai tiešām vēlaties izņemt visus ierakstus periodiskos ierakstus?',
  'LBL_CONFLICT' => 'Konflikts',
  'LBL_CREATE_CALL' => 'Reģistrēt zvanu',
  'LBL_CREATE_MEETING' => 'Ieplānot tikšanos',
  'LBL_CREATE_NEW_RECORD' => 'Izveidot darbību',
  'LBL_DATE' => 'Sākuma datums un laiks:',
  'LBL_DATE_END_ERROR' => 'Beigu datums ir pirms sākuma datuma',
  'LBL_DATE_TIME' => 'Datums un laiks',
  'LBL_DAY' => 'Diena',
  'LBL_DELETE_BUTTON' => 'Dzēst',
  'LBL_DURATION' => 'Ilgums',
  'LBL_EDIT_ALL_RECURRENCES' => 'Rediģēt visus atkārtojumus',
  'LBL_EDIT_RECORD' => 'Rediģēt darbību',
  'LBL_EDIT_USERLIST' => 'Lietotāju saraksts',
  'LBL_ERROR_LOADING' => 'Kļūda ielādējot',
  'LBL_ERROR_SAVING' => 'Kļūda saglabājot',
  'LBL_FILTER_BY_TEAM' => 'Filtrēt lietotājs pēc darba grupas:',
  'LBL_GENERAL_TAB' => 'Detaļas',
  'LBL_GOTO_DATE' => 'Doties uz datumu',
  'LBL_HOURS_ABBREV' => 'st',
  'LBL_INFO_DESC' => 'Apraksts',
  'LBL_INFO_DUE_DT' => 'Izpildes datums un laiks',
  'LBL_INFO_DURATION' => 'Ilgums',
  'LBL_INFO_NAME' => 'Temats',
  'LBL_INFO_RELATED_TO' => 'Attiecas uz',
  'LBL_INFO_START_DT' => 'Sākuma datums un laiks',
  'LBL_INFO_TITLE' => 'Papildus detaļas',
  'LBL_LOADING' => 'Notiek ielāde ...',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Kalendārs',
  'LBL_MODULE_NAME_SINGULAR' => 'Kalendārs',
  'LBL_MODULE_TITLE' => 'Kalendārs',
  'LBL_MONTH' => 'Mēnesis',
  'LBL_NEXT_DAY' => 'Nākamā diena',
  'LBL_NEXT_MONTH' => 'Nākamais mēnesis',
  'LBL_NEXT_SHARED' => 'Nākamais',
  'LBL_NEXT_WEEK' => 'Nākamā nedēļa',
  'LBL_NEXT_YEAR' => 'Nākamais gads',
  'LBL_NO' => 'Nē',
  'LBL_NO_USER' => 'Nav atbilstības laukam: Piešķirts lietotājam',
  'LBL_PARTICIPANTS_TAB' => 'Dalībnieki',
  'LBL_PM' => 'Vakars',
  'LBL_PREVIOUS_DAY' => 'Iepriekšējā diena',
  'LBL_PREVIOUS_MONTH' => 'Iepriekšējais mēnesis',
  'LBL_PREVIOUS_SHARED' => 'Iepriekšējais',
  'LBL_PREVIOUS_WEEK' => 'Iepriekšējā nedēļa',
  'LBL_PREVIOUS_YEAR' => 'Iepriekšējais gads',
  'LBL_RECURRING_LIMIT_ERROR' => 'Atkārtotos  $moduleTitle nevar ieplānot, jo tas pārsniedz maksimāli atļauto atkārtojumu skaitu  $limit.',
  'LBL_REFRESH' => 'Atsvaidzināt',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Dzēst visus atkārtojumus',
  'LBL_REPEAT_COUNT' => 'Atkārtošanos skaits',
  'LBL_REPEAT_DOW' => 'Uz',
  'LBL_REPEAT_END' => 'Beigas',
  'LBL_REPEAT_END_AFTER' => 'Pēc',
  'LBL_REPEAT_END_BY' => 'Ar',
  'LBL_REPEAT_INTERVAL' => 'Intervāls',
  'LBL_REPEAT_OCCURRENCES' => 'atkārtoti notikumi',
  'LBL_REPEAT_TAB' => 'Atkārtošanās',
  'LBL_REPEAT_TYPE' => 'Atkārtot',
  'LBL_REPEAT_UNTIL' => 'Atkārtot kamēr',
  'LBL_SAVE_BUTTON' => 'Saglabāt',
  'LBL_SAVING' => 'Saglabā...',
  'LBL_SCHEDULED' => 'Ieplānots',
  'LBL_SELECT_USERS' => 'Izvēlēties lietotājus kalendāra parādīšanai',
  'LBL_SENDING_INVITES' => 'Sūta ielūgumus .....',
  'LBL_SEND_INVITES' => 'Sūtīt uzaicinājumus',
  'LBL_SETTINGS' => 'Uzstādījumi',
  'LBL_SETTINGS_CALLS_SHOW' => 'Rādīt zvanus:',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Attēlot laika spraugas dienas un nedēļas skatos:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Rādīt uzdevumus:',
  'LBL_SETTINGS_TIME_ENDS' => 'Beigu laiks:',
  'LBL_SETTINGS_TIME_STARTS' => 'Sākuma laiks:',
  'LBL_SETTINGS_TITLE' => 'Uzstādījumi',
  'LBL_SHARED' => 'Kopīgs',
  'LBL_SHARED_CAL_TITLE' => 'Kopīgais kalendārs',
  'LBL_STATUS' => 'Statuss',
  'LBL_STYLE_ADVANCED' => 'Paplašināts',
  'LBL_STYLE_BASIC' => 'Pamata',
  'LBL_SUBJECT' => 'Temats',
  'LBL_USERS' => 'Lietotājs',
  'LBL_USER_CALENDARS' => 'Lietotāja kalendāri',
  'LBL_WEEK' => 'Nedēļa',
  'LBL_YEAR' => 'Gads',
  'LBL_YES' => 'Jā',
  'LNK_CALL_LIST' => 'Zvani',
  'LNK_IMPORT_CALLS' => 'Importēt zvanus',
  'LNK_IMPORT_MEETINGS' => 'Importēt tikšanās',
  'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
  'LNK_MEETING_LIST' => 'Tikšanās',
  'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos',
  'LNK_NEW_CALL' => 'Reģistrēt zvanu',
  'LNK_NEW_MEETING' => 'Ieplānot tikšanos',
  'LNK_NEW_TASK' => 'Izveidot uzdevumu',
  'LNK_TASK_LIST' => 'Uzdevumi',
  'LNK_VIEW_CALENDAR' => 'Šodien',
  'NOTICE_DURATION_TIME' => 'Ilgumam jābūt lielākam par 0',
);

