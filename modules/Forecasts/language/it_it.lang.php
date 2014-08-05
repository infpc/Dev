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
  'ERR_FORECAST_AMOUNT' => 'Confermare importo, deve essere un numero.',
  'LBL_ACTIONS' => 'Azioni',
  'LBL_AMOUNT' => 'Importo',
  'LBL_BASE_RATE' => '',
  'LBL_BEST_CASE' => 'Caso Migliore:',
  'LBL_BEST_CASE_BASE_CURRENCY' => '',
  'LBL_BEST_CASE_VALUE' => '',
  'LBL_CANCEL' => 'Annulla',
  'LBL_CHANGES_BY' => '',
  'LBL_CHART_ADJUSTED' => '',
  'LBL_CHART_AMOUNT' => 'Importo',
  'LBL_CHART_FOOTER' => 'Cronologia Previsioni<br />Budget vs Importi Previsti vs Valore Opportunità Chiuse',
  'LBL_CHART_FORECAST_FOR' => 'Previsione per {0}',
  'LBL_CHART_INCLUDED' => 'Incluso',
  'LBL_CHART_NOT_INCLUDED' => 'Non incluso',
  'LBL_CHART_OPTIONS' => 'Opzioni Tabella',
  'LBL_CHART_TITLE' => 'Budget vs. Confermato vs. Effettivo',
  'LBL_CHART_TYPE' => 'Tipo',
  'LBL_CLOSED' => 'Chiuso',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{0} {1}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{0} {1}, {2}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{0} {1}, {2}, e {3}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => 'migliore {0} {1} a {2}',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => '',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => 'probabile {0} {1} a {2}',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => '',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => 'Setup previsione',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => 'Previsione aggiornata',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => 'peggiore {0} {1} a {2}',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => '',
  'LBL_COMMITTED_MONTHS_AGO' => '',
  'LBL_COMMITTED_THIS_MONTH' => '',
  'LBL_COMMIT_AMOUNT' => 'Somma importi confermati.',
  'LBL_COMMIT_HEADER' => 'Conferma Previsione',
  'LBL_COMMIT_MESSAGE' => 'Desideri confermare questi importi?',
  'LBL_COMMIT_NOTE' => 'Inserisci un importo da confermare per l´Arco Temporale selezionato:',
  'LBL_COMMIT_STAGE' => '',
  'LBL_COPY' => 'Copia Valori',
  'LBL_COPY_AMOUNT' => 'Importo Totale',
  'LBL_COPY_FROM' => 'Copia valore da:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Importo Pesato Totale',
  'LBL_CREATED_BY' => 'Creato da',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_ID' => 'ID Valuta',
  'LBL_CURRENCY_RATE' => 'Tasso di Valuta',
  'LBL_DATA_SET' => 'Data Set:',
  'LBL_DATE_CLOSED' => 'Data Chiusura Prevista',
  'LBL_DATE_COMMITTED' => 'Data Conferma',
  'LBL_DATE_ENTERED' => 'Data Inserimento',
  'LBL_DATE_MODIFIED' => 'Data Modifica',
  'LBL_DELETED' => 'Cancellato',
  'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => '',
  'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => '',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => '',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => '',
  'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => '',
  'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => '',
  'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => '',
  'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => '',
  'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => '',
  'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => '',
  'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => '',
  'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => '',
  'LBL_DOWN' => 'giù',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Opportunità delle Previsioni',
  'LBL_DV_FORECAST_PERIOD' => 'Arco Temporale della Previsione',
  'LBL_DV_FORECAST_ROLLUP' => 'Rollup Previsioni',
  'LBL_DV_HEADER' => 'Previsioni: Matrice',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Ultimi Importi Confermati:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Ultima Data di Conferma:',
  'LBL_DV_MY_FORECASTS' => 'Le mie Previsioni',
  'LBL_DV_MY_TEAM' => 'Le Previsioni del mio Gruppo',
  'LBL_DV_TIMEPERIOD' => 'Arco Temporale:',
  'LBL_DV_TIMEPERIODS' => 'Archi Temporali:',
  'LBL_DV_TIMPERIOD_DATES' => 'Intervallo Data:',
  'LBL_EDITABLE_INVALID' => '',
  'LBL_EDITABLE_INVALID_RANGE' => 'Il valore deve essere tra {0} e {1}',
  'LBL_ERROR_NOT_MANAGER' => '',
  'LBL_EXPECTED_OPPORTUNITIES' => '',
  'LBL_EXPORT_CSV' => 'Esporta CSV',
  'LBL_FC_START_DATE' => 'Data Inizio',
  'LBL_FC_USER' => 'Programmata per',
  'LBL_FDR_ADJ_AMOUNT' => 'Importo corretto',
  'LBL_FDR_COMMIT' => 'Importo Confermato',
  'LBL_FDR_C_BEST_CASE' => 'Caso Migliore',
  'LBL_FDR_C_LIKELY_CASE' => 'Caso Probabile',
  'LBL_FDR_C_WORST_CASE' => 'Caso Peggiore',
  'LBL_FDR_DATE_COMMIT' => 'Data di Conferma',
  'LBL_FDR_OPPORTUNITIES' => 'Opportunità nella previsione:',
  'LBL_FDR_USER_NAME' => 'Report Diretto',
  'LBL_FDR_WEIGH' => 'Importo Pesato delle opportunità:',
  'LBL_FDR_WK_BEST_CASE' => 'Stima Caso Migliore',
  'LBL_FDR_WK_LIKELY_CASE' => 'Stima Caso Probabile',
  'LBL_FDR_WK_WORST_CASE' => 'Stima Caso Peggiore',
  'LBL_FILTERS' => 'Filtri',
  'LBL_FMT_DIRECT_FORECAST' => '(Diretto)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Rollup)',
  'LBL_FORECAST' => 'Previsione',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_1' => '',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_2' => '',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_3' => 'Puoi proseguire con il setup manuale cliccando',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => 'Intervalli',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => 'Scenari',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Archi Temporali',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => 'Variabili',
  'LBL_FORECASTS_CONFIG_LEAFPERIOD' => '',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS' => '',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_BEST' => '',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_LIKELY' => '',
  'LBL_FORECASTS_CONFIG_PROJECTED_SCENARIOS_WORST' => '',
  'LBL_FORECASTS_CONFIG_RANGES' => '',
  'LBL_FORECASTS_CONFIG_RANGES_EXCLUDE_INFO' => '',
  'LBL_FORECASTS_CONFIG_RANGES_OPTIONS' => '',
  'LBL_FORECASTS_CONFIG_RANGES_SETUP_NOTICE' => '',
  'LBL_FORECASTS_CONFIG_SHOW_BINARY_RANGES_DESCRIPTION' => '',
  'LBL_FORECASTS_CONFIG_SHOW_BUCKETS_RANGES_DESCRIPTION' => '',
  'LBL_FORECASTS_CONFIG_SHOW_CUSTOM_BUCKETS_RANGES' => '',
  'LBL_FORECASTS_CONFIG_START_DATE' => 'Scegli la data di inizio dell&#39;anno fiscale',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_SETUP_NOTICE' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_TYPE' => '',
  'LBL_FORECASTS_CONFIG_TITLE' => 'Setup Previsioni',
  'LBL_FORECASTS_CONFIG_USER_SPLASH' => 'Il modulo Previsioni non è ancora stato configurato. Si prega di contattare l&#39;amministratore del sistema.',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Variabili',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_DESC' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => 'Migliore',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => 'Probabile',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => 'Peggiore',
  'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => 'Le impostazioni sono state salvate. Si prega di attendere il caricamento del modulo.',
  'LBL_FORECASTS_WIZARD_REFRESH_NOTICE' => '',
  'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => '',
  'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => '',
  'LBL_FORECAST_FOR' => 'Matrice Previsioni per:',
  'LBL_FORECAST_HISTORY' => 'Previsioni: Cronologia',
  'LBL_FORECAST_HISTORY_TITLE' => 'Cronologia',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Caso Migliore',
  'LBL_FORECAST_OPP_COMMIT' => 'Caso Probabile',
  'LBL_FORECAST_OPP_COUNT' => 'Opportunità',
  'LBL_FORECAST_OPP_WEIGH' => 'Importo Pesato',
  'LBL_FORECAST_OPP_WORST' => 'Caso Peggiore',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => '',
  'LBL_FORECAST_SETTINGS' => 'Impostazioni',
  'LBL_FORECAST_TIME_ID' => 'ID Arco Temporale',
  'LBL_FORECAST_TITLE' => 'Previsione: {0}',
  'LBL_FORECAST_TYPE' => 'Tipo Previsione',
  'LBL_FORECAST_USER' => 'Utente',
  'LBL_FS_CASCADE' => 'Ribaltare a cascata?',
  'LBL_FS_CREATED_BY' => 'Creato da',
  'LBL_FS_DATE_ENTERED' => 'Data Inserimento',
  'LBL_FS_DATE_MODIFIED' => 'Data Modifica',
  'LBL_FS_DELETED' => 'Cancellata',
  'LBL_FS_END_DATE' => 'Data Fine',
  'LBL_FS_FORECAST_FOR' => 'Schedulata per:',
  'LBL_FS_FORECAST_START_DATE' => 'Data Inizio Previsione',
  'LBL_FS_MODULE_NAME' => 'Schedulazione Previsione',
  'LBL_FS_START_DATE' => 'Data Inizio',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Arco Temporale',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Arco Temporale',
  'LBL_FS_USER_ID' => 'ID Utente',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Importo Confermato per %s',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Previsioni Confermate',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Valore delle opportunità chiuse dentro %s',
  'LBL_GRAPH_OPPS_LEGEND' => 'Opportunità Chiuse',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Budget per %',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Budget',
  'LBL_GRAPH_TITLE' => 'Cronologia Previsioni',
  'LBL_GROUP_BY' => 'Raggruppa Per:',
  'LBL_INCLUDED_TOTAL' => '',
  'LBL_LESS' => 'Meno',
  'LBL_LIKELY_CASE' => 'Caso Probabile:',
  'LBL_LIKELY_CASE_BASE_CURRENCY' => '',
  'LBL_LIKELY_CASE_VALUE' => '',
  'LBL_LIST_FORM_TITLE' => 'Previsioni Confermate',
  'LBL_LOADING' => 'Caricamento',
  'LBL_LOADING_COMMIT_HISTORY' => '',
  'LBL_LV_COMMIT' => 'Importo Confermato',
  'LBL_LV_COMMIT_DATE' => 'Data Conferma',
  'LBL_LV_OPPORTUNITIES' => 'Opportunità',
  'LBL_LV_TIMPERIOD' => 'Arco Temporale',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data Fine',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data Inizio',
  'LBL_LV_TYPE' => 'Tipo Previsione',
  'LBL_LV_WEIGH' => 'Importo Pesato',
  'LBL_MODIFIED_USER_ID' => 'Modificato da',
  'LBL_MODULE_NAME' => 'Previsioni',
  'LBL_MODULE_NAME_SINGULAR' => 'Previsione',
  'LBL_MODULE_TITLE' => 'Previsioni',
  'LBL_MORE' => '',
  'LBL_MY_OPPORTUNITIES' => 'Opportunità ({0})',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Nessun Arco Temporale attivo per le Previsioni.',
  'LBL_OVERALL_TOTAL' => '',
  'LBL_OW_ACCOUNTNAME' => 'Azienda',
  'LBL_OW_DESCRIPTION' => 'Descrizione',
  'LBL_OW_MODULE_TITLE' => 'Matrice delle Opportunità',
  'LBL_OW_NEXT_STEP' => 'Passo Successivo',
  'LBL_OW_OPPORTUNITIES' => 'Opportunità',
  'LBL_OW_PROBABILITY' => 'Probabilità',
  'LBL_OW_REVENUE' => 'Importo',
  'LBL_OW_TYPE' => 'Tipo',
  'LBL_OW_WEIGHTED' => 'Importo Pesato',
  'LBL_PIPELINE_OPPORTUNITIES' => 'Pipeline Opportunità',
  'LBL_PIPELINE_REVENUE' => 'Pipeline Ricavo',
  'LBL_PIPELINE_SIZE' => 'Stato della Pipeline',
  'LBL_PREVIOUS_COMMIT' => '',
  'LBL_PRODUCT_ID' => 'ID Prodotto',
  'LBL_PROJECTED' => 'Previsione',
  'LBL_QC_COMMIT_BEST_CASE' => 'Importo Confermato (Caso Migliore):',
  'LBL_QC_COMMIT_BUTTON' => 'Conferma',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Importo Confermato (Caso Probabile):',
  'LBL_QC_COMMIT_VALUE' => 'Importo Confermato:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Importo Confermato (Caso Peggiore):',
  'LBL_QC_DIRECT_FORECAST' => 'La mia Previsione Diretta:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_QC_LAST_BEST_CASE' => 'Ultimo Importo Confermato(Caso Migliore):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Ultimo Importo Confermato:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Ultima Data di Conferma:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Ultimo Importo Confermato (Caso Probabile):',
  'LBL_QC_LAST_WORST_CASE' => 'Ultimo Importo Confermato (Caso Peggiore):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Conteggio Opportunità:',
  'LBL_QC_ROLLUP_FORECAST' => 'La mia Previsione di Gruppo:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Rollup Importo Confermato (Caso Migliore):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup Importi Confermati:',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Rollup Importo Confermato (Caso Probabile):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Rollup Importo Confermato (Caso peggiore):',
  'LBL_QC_TIME_PERIOD' => 'Arco Temporale:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Le mie Previsioni',
  'LBL_QC_WEIGHT_VALUE' => 'Importo Pesato:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Matrice',
  'LBL_QUOTA' => '',
  'LBL_QUOTA_ID' => '',
  'LBL_REPORTS_TO_USER_NAME' => 'Dipende Da',
  'LBL_RESET_CHECK' => 'Tutti i dati della matrice per il periodo selezionato e per l´utente corrente saranno eliminati. Continuare?',
  'LBL_RESET_WOKSHEET' => 'Azzera Matrice',
  'LBL_REVENUE' => 'Ricavo',
  'LBL_SALES_STAGE' => 'Fase',
  'LBL_SAVE_DRAFT' => 'Salva Bozza',
  'LBL_SAVE_WOKSHEET' => 'Salva Matrice',
  'LBL_SEARCH' => 'Seleziona',
  'LBL_SEARCH_LABEL' => 'Seleziona',
  'LBL_SHOW_CHART' => 'Visualizza Grafico',
  'LBL_SVFS_CASCADE' => 'Ribaltare sui Dipendenti Diretti?',
  'LBL_SVFS_FORECASTDATE' => 'Schedula Data Inizio',
  'LBL_SVFS_HEADER' => 'Schedulazione Previsioni:',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'Per',
  'LBL_TIMEPERIOD_NAME' => 'Arco Temporale',
  'LBL_TOTAL' => 'Totale',
  'LBL_TOTAL_VALUE' => 'Totali:',
  'LBL_TP_QUOTA' => 'Budget:',
  'LBL_TREE_PARENT' => 'Padre',
  'LBL_UNAUTH_FORECASTS' => 'Accesso non autorizzato alle impostazioni delle previsioni.',
  'LBL_UP' => 'su',
  'LBL_USER_NAME' => 'Nome Utente',
  'LBL_VERSION' => 'Versione',
  'LBL_WK_REVISION' => 'Revisione',
  'LBL_WK_VERSION' => 'Versione',
  'LBL_WORKSHEET_AMOUNT' => 'Importi Totali Stimati',
  'LBL_WORKSHEET_COMMIT_ALERT' => '',
  'LBL_WORKSHEET_COMMIT_CONFIRM' => '',
  'LBL_WORKSHEET_EXPORT_CONFIRM' => '',
  'LBL_WORKSHEET_ID' => 'ID Worksheet',
  'LBL_WORKSHEET_SAVE_CONFIRM' => '',
  'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => '',
  'LBL_WORST_CASE' => 'Caso Peggiore:',
  'LBL_WORST_CASE_BASE_CURRENCY' => '',
  'LBL_WORST_CASE_VALUE' => '',
  'LB_FS_BEST_CASE' => 'Caso Migliore',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Caso Probabile',
  'LB_FS_WORST_CASE' => 'Caso Peggiore',
  'LNK_FORECASTS_CONFIG_ADMIN_SPLASH_HERE' => 'qui.',
  'LNK_FORECAST_LIST' => 'Visualizza Cronologia Previsioni',
  'LNK_NEW_OPPORTUNITY' => 'Nuova Opportunità',
  'LNK_NEW_TIMEPERIOD' => 'Nuovo Arco Temporale',
  'LNK_QUOTA' => 'Visualizza Budget',
  'LNK_TIMEPERIOD_LIST' => 'Visualizza Archi Temporali',
  'LNK_UPD_FORECAST' => 'Matrice Previsioni',
);

