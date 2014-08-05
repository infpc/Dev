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

	

$mod_strings = array (
  'CHART_COUNT_PATTERN' => '{count} {module} dove {group_label} è {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} e´  {numerical_value}{thousands} dove {group_label} e´ {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} di{currency_symbol}{numerical_value}{thousands} dove {group_label} e´ {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Previsione del Trimestre Corrente',
  'DEFAULT_REPORT_TITLE_10' => 'Nuovi reclami per Mese',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline per Tipo per Gruppo',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline per Gruppo per Utente',
  'DEFAULT_REPORT_TITLE_13' => 'Compiti per Gruppo per Utente',
  'DEFAULT_REPORT_TITLE_14' => 'Chiamate per Gruppo per Utente',
  'DEFAULT_REPORT_TITLE_15' => 'Riunioni per Gruppo per Utente',
  'DEFAULT_REPORT_TITLE_16' => 'Aziende per Tipo per Settore',
  'DEFAULT_REPORT_TITLE_17' => 'Opportunità Vinte per Fonte del Lead',
  'DEFAULT_REPORT_TITLE_18' => 'Leads per Fonte del Lead',
  'DEFAULT_REPORT_TITLE_19' => 'Le mie metriche utilizzate (Oggi)',
  'DEFAULT_REPORT_TITLE_2' => 'Previsione Dettagliata',
  'DEFAULT_REPORT_TITLE_20' => 'Le mie metriche utilizzate (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_21' => 'Le mie metriche utilizzate (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_22' => 'I miei moduli utilizzati (Oggi)',
  'DEFAULT_REPORT_TITLE_23' => 'I miei moduli utilizzati  (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_24' => 'I miei moduli utilizzati (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_25' => 'Users Usage Metrics (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_26' => 'Users Usage Metrics (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_27' => 'Modules Used By My Direct Reports (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_28' => 'Slow Queries',
  'DEFAULT_REPORT_TITLE_29' => 'I miei report modificati (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_3' => 'Elenco Aziende Partner',
  'DEFAULT_REPORT_TITLE_31' => 'I miei record modificati di recente (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_32' => 'Record Modificati dai miei report diretti (Ultimi 30 Giorni)',
  'DEFAULT_REPORT_TITLE_4' => 'Elenco Aziende Clienti',
  'DEFAULT_REPORT_TITLE_41' => 'Sessioni Attive per Utente (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_42' => 'Riassunto Sessioni per Utente (Ultimi 7 Giorni)',
  'DEFAULT_REPORT_TITLE_43' => 'Proprietari dell´Azienda Cliente',
  'DEFAULT_REPORT_TITLE_44' => 'I miei nuovi clienti',
  'DEFAULT_REPORT_TITLE_45' => 'Opportunità per Fase di Vendita',
  'DEFAULT_REPORT_TITLE_46' => 'Opportunità per Tipo',
  'DEFAULT_REPORT_TITLE_47' => 'Chiamate da effettuare',
  'DEFAULT_REPORT_TITLE_48' => 'Riunioni da effettuare',
  'DEFAULT_REPORT_TITLE_49' => 'Compiti Aperti',
  'DEFAULT_REPORT_TITLE_5' => 'Elenco Chiamate in base alla data dell´ultimo contatto',
  'DEFAULT_REPORT_TITLE_50' => 'Opportunità Vinte per Azienda',
  'DEFAULT_REPORT_TITLE_51' => 'Opportunità Vinte per Utente',
  'DEFAULT_REPORT_TITLE_52' => 'Tutte le Opportunità Aperte',
  'DEFAULT_REPORT_TITLE_53' => 'Tutte le Opportunità Chiuse',
  'DEFAULT_REPORT_TITLE_56' => 'Opportunità divise per Prodotto per Periodo Passato, Corrente e Futuro divise per Mese',
  'DEFAULT_REPORT_TITLE_57' => 'Opportunità per Fase di Vendita per il passato, il periodo corrente e il futuro divise per Mese',
  'DEFAULT_REPORT_TITLE_58' => 'Previsione per il Trimestre Scorso/Corrente/Prossimo',
  'DEFAULT_REPORT_TITLE_6' => 'Opportunita per fonte del lead',
  'DEFAULT_REPORT_TITLE_7' => 'Reclami Aperti per Utente per Stato',
  'DEFAULT_REPORT_TITLE_8' => 'Reclami Aperti per Mese per Utente',
  'DEFAULT_REPORT_TITLE_9' => 'Reclami Aperti per Priorità per Utente',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Ogni ora',
    21600 => 'Ogni 6 ore',
    43200 => 'Ogni 12 ore',
    86400 => 'Giornalmente',
    604800 => 'Settimanalmente',
    1209600 => 'Ogni 2 settimane',
    2419200 => 'Ogni 4 settimane',
  ),
  'ERR_REPORT_INVALID' => 'La definizione del report "{0}" contiene campi non validi: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Il report non è valido',
  'ERR_SELECT_COLUMN' => 'Si prega prima di selezionare una colonna da visualizzare.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Report su',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtro',
  'LBL_3_CHOOSE' => '3. Scegli Colonne da Visualizzare',
  'LBL_3_GROUP' => '3. Raggruppa',
  'LBL_4_CHOOSE' => '4. Scegli Colonne da Visualizzare',
  'LBL_5_CHART_OPTIONS' => '5. Opzioni Grafico',
  'LBL_ACCOUNT' => 'Azienda',
  'LBL_ACCOUNTS' => 'Aziende',
  'LBL_ACCOUNT_REPORTS' => 'Reports Aziende',
  'LBL_ACTIVITIES_REPORTS' => 'Reports Attività',
  'LBL_ADDED_FAVORITES' => 'Report aggiunto ai miei Report Preferiti.',
  'LBL_ADD_BTN_HELP' => 'Clicca per aggiungere un nuovo Gruppo di Filtro. Utilizza i gruppi per applicare le logiche E/O a serie di filtri.',
  'LBL_ADD_COLUMN' => 'Aggiungi Colonna',
  'LBL_ADD_FILTER_TO' => 'Aggiungi il filtro a',
  'LBL_ADD_GROUP' => 'Aggiungi un nuovo gruppo di filtri',
  'LBL_ADD_NEW_FILTER' => 'Aggiungi Nuovo Filtro',
  'LBL_ADD_RELATE' => 'Aggiungi Relativo',
  'LBL_ADVANCED_FILTERS' => 'Filtri Avanzati',
  'LBL_AFTER' => 'Dopo',
  'LBL_ALERT_CANT_ADD' => 'Non puoi aggiungere un modulo relativo finchè non hai selezionato una tabella che si riferisca da.\\nSeleziona un modulo nel  dropdown sinistro di ´Aggiungi relativo´ pulsante che hai cliccato.',
  'LBL_ALL' => 'Almeno',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Tutti i Report Pubblicati',
  'LBL_ALL_REPORTS' => 'Visualizza i Report',
  'LBL_ALT_INFORMATION' => 'Informazioni',
  'LBL_ALT_SHOW' => 'Mostra',
  'LBL_AND' => 'e',
  'LBL_ANY' => 'Ogni',
  'LBL_ANY_ONE_OF' => 'Qualcuno di',
  'LBL_ASCENDING' => 'Crescente',
  'LBL_ASSIGNED_TO_NAME' => 'Assegnato a:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Selezionare almeno una colonna.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Almeno una colonna riassuntiva.',
  'LBL_AVAILABLE_FIELDS' => 'Campi Disponibili',
  'LBL_AVG' => 'AVG',
  'LBL_BASIC_FILTERS' => 'Filtri',
  'LBL_BEFORE' => 'Prima',
  'LBL_BUG_REPORTS' => 'Reports Bugs',
  'LBL_BY_DAY' => 'Da giorno',
  'LBL_BY_MONTH' => 'Da mese',
  'LBL_BY_QUARTER' => 'Da Trimestre',
  'LBL_BY_YEAR' => 'Da Anno',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Elenco Chiamate in base alla data dell´ultimo contatto',
  'LBL_CALL_REPORTS' => 'Reports Chiamate',
  'LBL_CANCEL' => 'Annulla',
  'LBL_CANNOT_BE_EMPTY' => 'non può essere vuoto.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Il grafico non può essere visualizzato a causa della sua configurazione.',
  'LBL_CASE_REPORTS' => 'Reports Reclami',
  'LBL_CHANGE' => 'Modifica',
  'LBL_CHART_DATA_HELP' => 'Selezionare il Sommario che verrà mostrato nel grafico.',
  'LBL_CHART_DESCRIPTION' => 'Descrizione',
  'LBL_CHART_OPTIONS' => 'Opzioni Tabella',
  'LBL_CHART_TYPE' => 'Tipo Grafico',
  'LBL_CHOOSE_COLUMNS' => 'Scegli colonne da visualizzare',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Scegli le colonne da visualizzare',
  'LBL_CHOOSE_SUMMARIES' => 'Scegli valori da visualizzare',
  'LBL_CLEAR' => 'Azzera',
  'LBL_COLUMN_NAME' => 'Nome Colonna',
  'LBL_COMBO_TYPE_AHEAD' => 'Ricerca per Campo',
  'LBL_CONTACT' => 'Contatto',
  'LBL_CONTACTS' => 'Contatti',
  'LBL_CONTACT_REPORTS' => 'Reports Contatti',
  'LBL_CONTAINS' => 'Contiene',
  'LBL_CONTENT' => 'Contenuto',
  'LBL_CONTRACT_REPORTS' => 'Report dei Contratti',
  'LBL_COUNT' => 'Conteggio',
  'LBL_CREATE_CUSTOM_REPORT' => 'Creazione guidata del report',
  'LBL_CREATE_REPORT' => 'Nuovo Report',
  'LBL_CSV_TIMESTAMP' => 'A_m_g_H_m_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Trattative del Trimestre Corrente',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Previsioni Trimestre Corrente',
  'LBL_CURRENT_USER' => 'Utente Corrente',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Elenco Aziende Clienti',
  'LBL_DATE' => 'Data Inizio',
  'LBL_DATE_BASED_FILTERS' => '<i>I filtri sulle date sono relativi al fuso orario dell´utente a cui <b> è assegnato </b> il report</i>',
  'LBL_DAY' => 'Giorno',
  'LBL_DEFINE_FILTERS' => 'Definire Filtri',
  'LBL_DELETE' => 'Cancella',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Il seguente campo di questo report non è più valido:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Si prega di modificare il report e controllare che gli altri parametri siano ancora rilevanti.',
  'LBL_DELETE_ERROR' => 'Solo il proprietario del report o l´amministratore del sistema può cancellare i report.',
  'LBL_DEL_THIS' => 'Rimuovi',
  'LBL_DESCENDING' => 'Decrescente',
  'LBL_DETAILED_FORECAST' => 'Dettagli Previsioni',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Steps to Choose Display Columns:</b><br/><br/>1) Click on a Module in the <b>Related Modules</b> pane that you would like to use to display data in your report. By default, the primary module (top node in the tree view) that you chose during the ´Select Module´ step is selected.<br/><br/><br />	You can select fields from a related module (child node in the tree view) by clicking on the module. Modules related to the modules related to the primary module can also be selected. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on the Field in the <b>Available Fields</b> pane to display the field data in the records in your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select additional fields. You can select any number of fields, but the report is generated more slowly and becomes less readable when you add more than necessary fields in the report.<br/><br/><br />	You can change the order fields by dragging and dropping them to the desired position. Changing the field order changes the order in which the columns are displayed in the results.',
  'LBL_DISPLAY_COLUMNS' => 'Mostra Colonne',
  'LBL_DISPLAY_SUMMARIES' => 'Scegli il Tipo di Visualizzazione dei Sommari',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Steps to Choose Display Summaries:</b><br/><br/>1) Click on the Module in the <b>Related Modules</b> pane that you would like to use for the summaries in your report. By default, the primary module (top node in the tree view) is selected.<br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on a Field in the <b>Available Fields</b> pane to select summaries for your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select additional fields for the summaries in your report.<br/><br/>For Matrix Reports, you can select more than one field to display multiple values within a single cell in your report.',
  'LBL_DOES_NOT_CONTAIN' => 'Non Contiene',
  'LBL_DOES_NOT_EQUAL' => 'Non è uguale',
  'LBL_DOWN' => 'Giù',
  'LBL_DO_ROUND' => 'Arrotondare i numeri sopra 100000',
  'LBL_DO_ROUND_HELP' => 'Nei grafici i numeri sopra il 100000 verranno arrotondati.<br /><br>Esempio: 350000 sarà espresso come 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Come Matrice',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Come Tipo Originale',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Come Righe e Colonne',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Come Sommario con Dettagli',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Come Sommario',
  'LBL_EDIT' => 'Modifica',
  'LBL_EDITLAYOUT' => 'Modifica Layout',
  'LBL_EMAIL_REPORTS' => 'Reports Email',
  'LBL_ENDS_WITH' => 'Finisce con',
  'LBL_END_DATE' => 'Data Fine',
  'LBL_EQUALS' => 'Uguali',
  'LBL_EXACT' => 'Esatto',
  'LBL_EXPORT' => 'Esporta',
  'LBL_FAILURE_REPORT' => 'FALLITO: Report',
  'LBL_FAVORITE' => 'Preferito',
  'LBL_FAVORITES_TITLE' => 'Reports: I miei Report Preferiti',
  'LBL_FAVORITE_REPORTS' => 'I miei Preferiti',
  'LBL_FAVORITE_REPORTS_TITLE' => 'I miei Report Preferiti',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Tutti i campi riportabili dal modulo selezionato ai <B>Moduli Correlati</B> compaiono qui. Selezionare un campo.',
  'LBL_FIELD_NAME' => 'Nome Campo',
  'LBL_FILTER' => 'Filtro',
  'LBL_FILTERS' => 'Filtri',
  'LBL_FILTERS_END' => 'dei seguenti filtri.',
  'LBL_FILTERS_HELP_DESC' => '<b>Steps per Definire i Filtri:</b><br/><br/>1) Clicca sul Modulo che vuoi utilizzare per definire i filtri nel riquadro <b>Moduli Correlati</b>. Di default, viene selezionato il modulo principale (livello superiore nella visuallizzazione ad albero). <br/><br/>	Puoi selezionare un modulo relazionato (livello inferiore nella visualizzazione ad albero) cliccando sul modulo stesso. Espandi il livello per visualizzare i moduli aggiuntivi correlati al modulo relazionato. Il modulo che selezioni determina quali campi saranno riportati nel riquadro <b>Campi Disponibili</b>.<br/><br/>	2) Click on a Field in the <b>Available Fields</b> pane to add it to the filters. You can also search for the field by typing in the text box in the pane.<br/><br/>	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select any number of fields to use as filters.<br/><br/>	3) Choose <b>AND</b> or <b>OR</b> to designate whether all filters or any filters, respectively, are used to find results for the report.<br/><br/>	4) [Optional] Click on <b>Add Filter Group</b> to create groups of filters. You can have any number of filter groups and any number of filters in a group to create nested filters.<br/><br/>	5) [Optional] Select the Run-time option for a Filter to allow users to use the filter to further customize the results of the reports while viewing the report.',
  'LBL_FILTER_AND' => 'E',
  'LBL_FILTER_CONDITIONS' => 'Seleziona Operatore:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'A',
  'LBL_FILTER_DATE_RANGE_START' => 'Da',
  'LBL_FILTER_OR' => 'O',
  'LBL_FORECAST_REPORTS' => 'Report Previsione',
  'LBL_FUNNEL' => 'Imbuto',
  'LBL_GRAND_TOTAL' => 'Importo Totale',
  'LBL_GREATER_THAN' => 'Maggiore di',
  'LBL_GROUP_BY' => 'Raggruppa Per',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Steps to Define Group By:</b><br></br>1) Click on a Module in the <b>Related Modules</b> pane that you would like to use to group records in your report. By default, the primary module (top node in the tree view) is selected. <br/><br/><br />	You can select a related module (child node in the tree view) by clicking on the module. Expand the node to view additional modules related to the related module. The module that you select determines which reportable fields appear in the <b>Available Fields</b> pane.<br/><br/><br />	2) Click on the Field in the <b>Available Fields</b> pane to group records by the field in your report. You can also search for the field by typing in the text box in the pane.<br/><br/><br />	After selecting any number of fields from the module selected in the <b>Related Modules</b> pane, you can choose a different module from which you can select any number of fields to group records. However, the report becomes less readable when you group by more than several fields.<br/><br/><br />	You can change the order of the fields by dragging and dropping them to the desired position.  Changing the order affects the way the results are displayed.<br/><br/>  For Matrix Reports, you can use a maximum of three fields to group records.',
  'LBL_GROUP_BY_REQUIRED' => 'Per costruire un grafico sono richieste almeno un raggruppamento e una colonna riassuntiva.',
  'LBL_HELLO' => 'Ciao',
  'LBL_HELP' => 'Aiuto',
  'LBL_HIDE_COLUMNS' => 'Nascondi Colonne',
  'LBL_HIDE_SUMMARIES' => 'Nascondi Sommario',
  'LBL_HORIZ_BAR' => 'Colonna Orizzontale',
  'LBL_IS' => 'è',
  'LBL_IS_BETWEEN' => 'è tra',
  'LBL_IS_EMPTY' => 'è vuoto',
  'LBL_IS_NOT' => 'Non è',
  'LBL_IS_NOT_EMPTY' => 'Non è vuoto',
  'LBL_IS_NOT_ONE_OF' => 'Non è uno di',
  'LBL_IS_PUBLISHED' => 'E´ Pubblicato',
  'LBL_LABEL' => 'Etichetta',
  'LBL_LAST_30_DAYS' => 'Ultimi 30 Giorni',
  'LBL_LAST_7_DAYS' => 'Ultimi 7 giorni',
  'LBL_LAST_MONTH' => 'Ultimo Mese',
  'LBL_LAST_QUARTER' => 'Ultimo Trimestre',
  'LBL_LAST_WEEK' => 'Ultima settimana',
  'LBL_LAST_YEAR' => 'Anno Precedente',
  'LBL_LEAD' => 'Lead',
  'LBL_LEADS' => 'Lead',
  'LBL_LEAD_REPORTS' => 'Reports Lead',
  'LBL_LEFT' => 'Sinistra',
  'LBL_LESS_THAN' => 'Meno di',
  'LBL_LINE' => 'Linee',
  'LBL_LIST_FORM_TITLE' => 'Report',
  'LBL_LIST_PUBLISHED' => 'Pubblicato',
  'LBL_MATRIX_LAYOUT' => 'Opzioni Layout:',
  'LBL_MATRIX_REPORT' => 'Report a Matrice',
  'LBL_MATRIX_REPORT_DESC' => 'Crea un report a raggruppamento che mostri i risultati in una griglia e raggruppati per un massimo di tre campi.',
  'LBL_MAX' => 'MAX',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Un report a matrice non può avere più di 3 gruppi di clausole.',
  'LBL_MEETING_REPORTS' => 'Reports Riunioni',
  'LBL_MIN' => 'MIN',
  'LBL_MINIMUM_2_GROUP_BY' => 'Un report a matrice deve avere almeno 2 gruppi di clausole.',
  'LBL_MISSING_FIELDS' => 'Campi mancanti',
  'LBL_MISSING_INPUT_VALUE' => 'Manca valore da inserire.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Manca secondo valore da inserire.',
  'LBL_MODULE' => 'Modulo',
  'LBL_MODULE_CHANGE_PROMPT' => 'Cambiando il modulo selezionato ci sarà una perdita di filtri, colonne visualizzate, etc. Vuoi comunque continuare?',
  'LBL_MODULE_NAME' => 'Reports',
  'LBL_MODULE_NAME_SAVED' => 'Nome Modulo',
  'LBL_MODULE_NAME_SINGULAR' => 'Report',
  'LBL_MODULE_TITLE' => 'Report: Home',
  'LBL_MODULE_VIEWER_TITLE' => 'Report Viewer: Home',
  'LBL_MONTH' => 'Mese',
  'LBL_MORE' => 'Più',
  'LBL_MY_ACCOUNT_REPORTS' => 'I miei Reports Azienda',
  'LBL_MY_BUG_REPORTS' => 'I miei Reports Bug',
  'LBL_MY_CALL_REPORTS' => 'I miei Reports Chiamate',
  'LBL_MY_CASE_REPORTS' => 'I miei Reports Reclami',
  'LBL_MY_CONTACT_REPORTS' => 'I miei Reports Contatti',
  'LBL_MY_CONTRACT_REPORTS' => 'Report dei miei contratti',
  'LBL_MY_EMAIL_REPORTS' => 'I miei Reports Email',
  'LBL_MY_FORECAST_REPORTS' => 'I miei Reports Previsioni',
  'LBL_MY_LEAD_REPORTS' => 'I miei Reports Lead',
  'LBL_MY_MEETING_REPORTS' => 'I miei Reports Riunioni',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'I miei Reports Opportunità',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'I miei Report sui Compiti di Progetto',
  'LBL_MY_PROSPECT_REPORTS' => 'I miei Reports Obiettivi',
  'LBL_MY_QUOTE_REPORTS' => 'I miei Reports Offerte',
  'LBL_MY_REPORTS' => 'I miei report',
  'LBL_MY_SAVED_REPORTS' => 'I miei Report salvati',
  'LBL_MY_TASK_REPORTS' => 'I miei Reports Compiti',
  'LBL_MY_TEAMS_REPORTS' => 'Report del mio Gruppo',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Reports Aziende del mio Gruppo',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Reports Bug del mio Gruppo',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Reports Chiamate del mio Gruppo',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Reports Reclami del mio Gruppo',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Reports Contatti del mio Gruppo',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Reports Contratti del mio Gruppo',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Reports Email del mio Gruppo',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Reports Previsioni del mio Gruppo',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Reports Lead del mio Gruppo',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Reports Riunioni del mio Gruppo',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Reports Opportunità del mio Gruppo',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Reports Compiti di Progetto del mio Gruppo',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Reports Obiettivi del mio Gruppo',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Reports Offerte del mio Gruppo',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Reports Compiti del mio Gruppo',
  'LBL_NEXT' => 'Avanti >',
  'LBL_NEXT_30_DAYS' => 'Prossimi 30 Giorni',
  'LBL_NEXT_7_DAYS' => 'Prossimi 7 giorni',
  'LBL_NEXT_MONTH' => 'Mese Successivo',
  'LBL_NEXT_QUARTER' => 'Prossimo Trimestre',
  'LBL_NEXT_RUN' => 'Prossima Email',
  'LBL_NEXT_WEEK' => 'Settimana Successiva',
  'LBL_NEXT_YEAR' => 'Anno Successivo',
  'LBL_NONE' => '-- nessuno --',
  'LBL_NONE_STRING' => 'Nessuno',
  'LBL_NOTHING_WAS_SELECTED' => 'Nessuna selezione.',
  'LBL_NOT_ON' => 'Diversa da',
  'LBL_NO_ACCESS' => 'Non sei in grado di accedere a questo report a causa delle restrizioni dei permessi.',
  'LBL_NO_CHART' => 'Nessuna tabella',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Non è possibile costruire la tabella in quanto non ci sono dati sufficienti',
  'LBL_NO_FILTERS' => 'non ha filtri.',
  'LBL_NO_IMAGE' => 'Nessuna Immagine',
  'LBL_NO_REPORTS' => 'Nessun risultato.',
  'LBL_OF' => 'di',
  'LBL_ON' => 'Uguale a',
  'LBL_ONE_OF' => 'è uno di',
  'LBL_OPPORTUNITIES' => 'Opportunità',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Opportunità per Fonte del Lead',
  'LBL_OPPORTUNITY' => 'Opportunità',
  'LBL_OPPORTUNITY_REPORTS' => 'Reports Opportunità',
  'LBL_OPTIONAL_HELP' => 'Selezionare le caselle per visualizzare i record del modulo principale anche se i record del modulo relazionato non esistono. Quando questa casella non è selezionata, i record del modulo principale saranno visualizzati solo se hanno un o o più record del modulo relazionato.',
  'LBL_OPTIONAL_MODULES' => 'Moduli Opzionali',
  'LBL_ORDER_BY' => 'Ordina per',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Moduli Correlati Opzionali',
  'LBL_OWNER' => 'Assegnato a',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Elenco Aziende Partner',
  'LBL_PDF_TIMESTAMP' => 'A_m_g_H_m',
  'LBL_PIE' => 'Torta',
  'LBL_PREVIEW_REPORT' => 'Anteprima',
  'LBL_PREVIOUS' => '< Indietro',
  'LBL_PROJECT_TASK_REPORTS' => 'Report sui Compiti di Progetto',
  'LBL_PROSPECT_REPORTS' => 'Report degli Obiettivi',
  'LBL_PUBLISH' => 'pubblicare',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Reports Azienda Pubblicati',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Reports Bug Pubblicati',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Reports Chiamata Pubblicati',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Reports Reclamo Pubblicato',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Reports Contatto Pubblicati',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Report dei Contratti Pubblicati',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Reports Email Pubblicati',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Reports Previsione Pubblicati',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Reports Lead Pubblicati',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Reports Riunione Pubblicati',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Reports Opportunità Pubblicati',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Report sui Compiti di Progetto Pubblicati',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Reports Obiettivo Pubblicati',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Reports Offerta Pubblicati',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Reports Compito Pubblicati',
  'LBL_QUARTER' => 'Trimestre',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Query',
  'LBL_QUOTE_REPORTS' => 'Reports Offerte',
  'LBL_RELATED' => 'Correlato:',
  'LBL_RELATED_MODULES' => 'Moduli Correlati',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Il modulo principale e tutti i moduli correlati compaiono qui. Selezionare il modulo.',
  'LBL_RELATED_TABLE_BLANK' => 'Seleziona un modulo di riferimento.',
  'LBL_REMOVE' => 'Rimuovi',
  'LBL_REMOVED_FAVORITES' => 'Report rimosso dai miei Report Preferiti.',
  'LBL_REMOVE_BTN_HELP' => 'Cliccare per cancellare il Gruppo di filtri.',
  'LBL_REMOVE_GROUP' => 'Cancella il gruppo di filtri',
  'LBL_REPORTS' => 'Report',
  'LBL_REPORT_ATT_MODULES' => 'Moduli',
  'LBL_REPORT_ATT_NAME' => 'Nome',
  'LBL_REPORT_COLLAPSE_ALL' => 'Riduci Tutto',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Questo report contiene dati nel seguente ordine di colonne:',
  'LBL_REPORT_DETAILS' => 'Dettagli Report',
  'LBL_REPORT_EXPAND_ALL' => 'Espandi Tutto',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'I filtri del Report sono stati modificati dall´ultima esecuzione.',
  'LBL_REPORT_GRAND_TOTAL' => 'Importo Totale',
  'LBL_REPORT_GROUP_BY' => 'Raggruppamento',
  'LBL_REPORT_HIDE_CHART' => 'Nascondi Tabella',
  'LBL_REPORT_HIDE_DETAILS' => 'Nascondi Dettagli',
  'LBL_REPORT_LAST_RUN_DATE' => 'Consultato il',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Il report è stato modificato dall´ultima esecuzione.',
  'LBL_REPORT_MODULES' => 'Moduli dei Report',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Report Viewer',
  'LBL_REPORT_NAME' => 'Nome Report',
  'LBL_REPORT_RESET_FILTER' => 'Reimposta',
  'LBL_REPORT_RESULTS' => 'Risultati',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Clicca su Esegui Report per visualizzare i risultati.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Applica',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Schedulazione',
  'LBL_REPORT_SHOW_CHART' => 'Mostra Grafico',
  'LBL_REPORT_SHOW_DETAILS' => 'Mostra Dettagli',
  'LBL_REPORT_TYPE' => 'Tipo di Report',
  'LBL_REPORT__ATT_TYPE' => 'Tipo',
  'LBL_RIGHT' => 'Destra',
  'LBL_ROLLOVER' => 'Passa sopra alle colonne per i dettagli.',
  'LBL_ROLLOVER_SQUARE' => 'Passa sopra alla casella per i dettagli.',
  'LBL_ROLLOVER_WEDGE' => 'Passa sopra alle fette per i dettagli.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Report a Righe e Colonne',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Crea un report a tabella che contenga i valori dei campi selezionati in modo tale da poter visualizzare i record corrispondenti ai criteri specificati.',
  'LBL_RUNTIME_FILTERS' => 'Filtri Run Time',
  'LBL_RUNTIME_HELP' => 'Seleziona questa casella per permettere agli utenti di cambiare il valore del filtro prima di eseguire il report.',
  'LBL_RUN_BUTTON_TITLE' => 'Esegui Report [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Esegui Report',
  'LBL_RUN_TIME_LABEL' => 'Run Time',
  'LBL_SAVED_SEARCH' => 'Ricerca & Layout Salvati',
  'LBL_SAVE_AS' => 'Salva come',
  'LBL_SAVE_RUN' => 'Salva ed Esegui',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'e salvato con il nome "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Se vuoi cambiare le impostazioni del report, entra nell´applicazione Sugar e clicca sulla scheda "Report".',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'L´allegato è un report auto generato e spedito dall´applicazione di Sugar. Questo report è stato generato su',
  'LBL_SCHEDULE_ACTIVE' => 'Attivo',
  'LBL_SCHEDULE_EMAIL' => 'Schedula Report',
  'LBL_SCHEDULE_REPORT' => 'Report Schedulati',
  'LBL_SCHEDULE_TYPE' => 'Tipo Schedulazione',
  'LBL_SEARCH_FORM_TITLE' => 'Elenco Report',
  'LBL_SELECT' => 'Seleziona',
  'LBL_SELECT_GROUP_BY' => 'Definire Gruppo per',
  'LBL_SELECT_MODULE' => 'Selezionare Modulo',
  'LBL_SELECT_MODULE_BUTTON' => 'Cliccare su un icona per selezionare il Modulo.',
  'LBL_SELECT_RECORD' => 'Seleziona Record',
  'LBL_SELECT_REPORT_TYPE' => 'Clicca sull´icona per selezionare il Tipo Report.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Selezionare il Tipo Report',
  'LBL_SHOW' => 'Mostra',
  'LBL_SHOW_DETAILS' => 'Mostra Dettagli',
  'LBL_SHOW_QUERY' => 'Mostra Query',
  'LBL_SORT' => 'Tipo',
  'LBL_STARTS_WITH' => 'Parte con',
  'LBL_START_DATE' => 'Data Inizio',
  'LBL_STATUS' => 'Stato',
  'LBL_SUBJECT' => 'Oggetto',
  'LBL_SUBMIT_QUERY' => 'Esegui Query',
  'LBL_SUCCESS_REPORT' => 'RIUSCITO:  Report',
  'LBL_SUM' => 'SUM',
  'LBL_SUMMARY_COLUMNS' => 'Colonne Riassuntive',
  'LBL_SUMMATION_REPORT' => 'Report a Raggruppamento',
  'LBL_SUMMATION_REPORT_DESC' => 'Crea un report a tabella che fornisca i dati per calcolare i record corrispondenti ai criteri specificati. I dati possono anche essere rappresentati in un grafico.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Report a Raggruppamento con Dettagli',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Crea un report a raggruppamento che mostri i dati relativi ai record nei risultati.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Summario con Dettagli',
  'LBL_TABLE_CHANGED' => 'La lista dei moduli è stata modificata, si prega di controllare i criteri inseriti nella scheda del gruppo.',
  'LBL_TASK_REPORTS' => 'Reports Compiti',
  'LBL_TEAM' => 'Gruppi',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Non ci sono report di questo tipo.',
  'LBL_THIS_MONTH' => 'Questo Mese',
  'LBL_THIS_QUARTER' => 'Questo Trimestre',
  'LBL_THIS_WEEK' => 'Questa settimana',
  'LBL_THIS_YEAR' => 'Questo Anno',
  'LBL_TIME_INTERVAL' => 'Intervallo di Tempo',
  'LBL_TITLE' => 'Titolo',
  'LBL_TODAY' => 'Oggi',
  'LBL_TOMORROW' => 'Domani',
  'LBL_TOTAL' => 'Totale',
  'LBL_TOTAL_IS' => 'Totale è',
  'LBL_TO_PDF' => 'Salva come PDF',
  'LBL_TYPE' => 'Tipo',
  'LBL_UNTITLED' => 'Senza Titolo',
  'LBL_UN_PUBLISH' => 'non-pubblicare',
  'LBL_UP' => 'Su',
  'LBL_UPDATE_SCHEDULE' => 'Aggiorna Schedulazione',
  'LBL_USER_EMPTY_HELP' => 'Per vedere i records che non sono stati assegnati ad alcun Utente, controlla la casella ´Moduli Correlati Opzionali´ nell´area Dettagli Reports oltre ad usare l´opzione ´E´ Vuoto´ nel filtro Utente Assegnato. In questo modo verranno visualizzati tutti i records che sono collegati ad un Utente.',
  'LBL_USE_COLUMN_FOR' => 'Serie di dati',
  'LBL_VERT_BAR' => 'Colonna Verticale',
  'LBL_VIEW' => 'vista',
  'LBL_VIEWER_RUNTIME_HELP' => 'Specifica i valori per i <b>Filtri Run Time</b> e clicca su<b>Applica Filtri</b> per ri-eseguire il report.',
  'LBL_WAS_NOT_SAVED' => 'non è stato salvato',
  'LBL_WAS_SAVED' => 'è stato salvato',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Valore Peso Medio',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Valore Peso Totale',
  'LBL_WHOSE_MAXIMUM' => 'di cui il massimo',
  'LBL_WHOSE_MINIMUM' => 'di cui il minimo',
  'LBL_WITH_AN_AVERAGE' => 'con una media',
  'LBL_WITH_A_TOTAL' => 'con un totale',
  'LBL_WITH_DETAILS' => 'Con dettagli',
  'LBL_WORKSHEET' => 'Matrice',
  'LBL_YEAR' => 'Anno',
  'LBL_YESTERDAY' => 'Ieri',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Non ci sono report salvati.',
  'LNK_NEW_ACCOUNT' => 'Nuova Azienda',
  'LNK_NEW_CALL' => 'Log Chiamata',
  'LNK_NEW_CASE' => 'Nuovo Reclamo',
  'LNK_NEW_CONTACT' => 'Nuovo Contatto',
  'LNK_NEW_EMAIL' => 'Archivia Email',
  'LNK_NEW_MEETING' => 'Nuova Riunione',
  'LNK_NEW_NOTE' => 'Nuova Nota o Allegato',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_TASK' => 'Nuovo Compito',
  'MSG_NO_PERMISSIONS' => 'Non hai il permesso per modificare questo report',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Impossibile pubblicare. E´ presente un altro report pubblicato con lo stesso nome.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Impossibile annullare la pubblicazione di un report di un altro utente. Presente un altro report pubblicato con lo stesso nome.',
);

