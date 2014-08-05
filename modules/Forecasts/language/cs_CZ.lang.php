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
  'ERR_FORECAST_AMOUNT' => 'Závazný Počet je povinné číselný údaj.',
  'LBL_ACTIONS' => 'Akce',
  'LBL_AMOUNT' => 'Částka',
  'LBL_BASE_RATE' => 'Základní kurz',
  'LBL_BEST_CASE' => 'Nejlepší případ:',
  'LBL_CANCEL' => 'Zrušit',
  'LBL_CHANGES_BY' => 'Změněno {0}',
  'LBL_CHART_ADJUSTED' => '(Upravena)',
  'LBL_CHART_AMOUNT' => 'Částka',
  'LBL_CHART_FOOTER' => 'Historie Prognóz',
  'LBL_CHART_INCLUDED' => 'Včetně',
  'LBL_CHART_NOT_INCLUDED' => 'Kromě',
  'LBL_CHART_OPTIONS' => 'Možnosti grafu',
  'LBL_CHART_TITLE' => 'Kvóta vs. závazné vs. aktuální',
  'LBL_CHART_TYPE' => 'Typ:',
  'LBL_CLOSED' => 'Uzavřený',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{0} {1}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{0} {1}, {2}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{0} {1}, {2}, a {3}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => 'nejlépe {0} {1} až {2}',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => 'nejlépe stejné',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => 'nejspíše {0} {1} až {2}',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => 'nejspíše stejné',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => 'Nastavit předpověď',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => 'Aktualizovaná předpověď',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => 'nejhůře {0} {1} až {2}',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => 'nejhůře stejné',
  'LBL_COMMITTED_MONTHS_AGO' => 'o {0} měsíc-ů dříve {1}',
  'LBL_COMMITTED_THIS_MONTH' => 'Tento měsíc: {0}',
  'LBL_COMMIT_AMOUNT' => 'Celkový závazný počet',
  'LBL_COMMIT_HEADER' => 'Schválit předpověď',
  'LBL_COMMIT_MESSAGE' => 'Chcete se zavázat k těmto částkám?',
  'LBL_COMMIT_NOTE' => 'Zadejte částky, které byste chtěli zavázat ve vybraném časovém období:',
  'LBL_COMMIT_STAGE' => 'Závazek',
  'LBL_COPY' => 'Kopírovat hodnoty',
  'LBL_COPY_AMOUNT' => 'Celková částka',
  'LBL_COPY_FROM' => 'Kopírovat hodnoty z:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Celkový vážený počet',
  'LBL_CREATED_BY' => 'Vytvořeno',
  'LBL_CURRENCY' => 'Měna',
  'LBL_CURRENCY_ID' => 'Měna ID:',
  'LBL_CURRENCY_RATE' => 'Kurz',
  'LBL_DATA_SET' => 'Data set:',
  'LBL_DATE_CLOSED' => 'Předpokládané datum uzavření:',
  'LBL_DATE_COMMITTED' => 'Datum schválení',
  'LBL_DATE_ENTERED' => 'Datum vložení',
  'LBL_DATE_MODIFIED' => 'Datum úpravení',
  'LBL_DELETED' => 'Smazáno',
  'LBL_DISTANCE_ABOVE_BEST_FROM_CLOSED' => 'Nejlépe nad uzavřením',
  'LBL_DISTANCE_ABOVE_BEST_FROM_QUOTA' => 'Nejlépe nad nabídkou',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_CLOSED' => 'Nejspíše nad uzavřením',
  'LBL_DISTANCE_ABOVE_LIKELY_FROM_QUOTA' => 'Nejspíše nad nabídkou',
  'LBL_DISTANCE_ABOVE_WORST_FROM_CLOSED' => 'Nejhůře nad uzavřením',
  'LBL_DISTANCE_ABOVE_WORST_FROM_QUOTA' => 'Nejhůře nad nabídkou',
  'LBL_DISTANCE_LEFT_BEST_TO_CLOSED' => 'Nejlépe pod uzavřením',
  'LBL_DISTANCE_LEFT_BEST_TO_QUOTA' => 'Nejhůře pod nabídkou',
  'LBL_DISTANCE_LEFT_LIKELY_TO_CLOSED' => 'Nejspíše pod uzavřením',
  'LBL_DISTANCE_LEFT_LIKELY_TO_QUOTA' => 'Nejspíše pod nabídkou',
  'LBL_DISTANCE_LEFT_WORST_TO_CLOSED' => 'Nejhůře pod uzavřením',
  'LBL_DISTANCE_LEFT_WORST_TO_QUOTA' => 'Nejhůře pod nabídkou',
  'LBL_DOWN' => 'Dolů',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Předpověď obchodů',
  'LBL_DV_FORECAST_PERIOD' => 'Předpověď časové období',
  'LBL_DV_FORECAST_ROLLUP' => 'Kumulativní prognóza',
  'LBL_DV_HEADER' => 'Předpovědi: list',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Poslední schválené množství:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Poslední datum schválení:',
  'LBL_DV_MY_FORECASTS' => 'Moje předpovědi',
  'LBL_DV_MY_TEAM' => 'Předpovědi mého týmu',
  'LBL_DV_TIMEPERIOD' => 'Časové období:',
  'LBL_DV_TIMEPERIODS' => 'Časová období:',
  'LBL_DV_TIMPERIOD_DATES' => 'Časové rozpětí:',
  'LBL_EDITABLE_INVALID' => 'Neplatná hodnota pro {0}',
  'LBL_EDITABLE_INVALID_RANGE' => 'hodnota musí být mezi {0} a {1}',
  'LBL_ERROR_NOT_MANAGER' => 'Chyba: uživatel {0} nemá přístupk předpovědi {1}',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Očekávané obchody',
  'LBL_EXPORT_CSV' => 'Export CSV',
  'LBL_FC_START_DATE' => 'Počáteční datum',
  'LBL_FC_USER' => 'Plán pro',
  'LBL_FDR_ADJ_AMOUNT' => 'Upravená částka',
  'LBL_FDR_COMMIT' => 'Schválený počet',
  'LBL_FDR_C_BEST_CASE' => 'Nejlepší případ',
  'LBL_FDR_C_LIKELY_CASE' => 'Pravděpodobný případ',
  'LBL_FDR_C_WORST_CASE' => 'Nejhorší případ',
  'LBL_FDR_DATE_COMMIT' => 'Datum schválení',
  'LBL_FDR_OPPORTUNITIES' => 'Obchody v předpovědi:',
  'LBL_FDR_USER_NAME' => 'Přímý report',
  'LBL_FDR_WEIGH' => 'Vážený Počet ochodů:',
  'LBL_FDR_WK_BEST_CASE' => 'Odhadovaný nejlepší případ',
  'LBL_FDR_WK_LIKELY_CASE' => 'Odhadovaný nejpravděpodobnejší případ',
  'LBL_FDR_WK_WORST_CASE' => 'Odhadovaný nejhorší případ',
  'LBL_FILTERS' => 'Filtry',
  'LBL_FMT_DIRECT_FORECAST' => '(Direct)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Kumulativní)',
  'LBL_FORECAST' => 'Předpověď',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_1' => 'Nastavení prognóz',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Časová období:',
  'LBL_FORECASTS_CONFIG_TITLE' => 'Nastavení prognóz',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Proměnné',
  'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => 'Proto bude vzorec pro pipeline :',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => 'Nejlépe',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => 'Nejspíše',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => 'Nejhůře',
  'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => 'Nastavení bylo uloženo. Počkejte prosím, než se modul znovu načte.',
  'LBL_FORECASTS_WIZARD_REFRESH_NOTICE' => 'Je toto vaše první spuštění Předpověďního modulu , Vaše Příležitostí potřebují být nahrány. Tento proces může trvat několik minut, a možná budete muset aktualizovat stránku.',
  'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => 'Úspěšně byl nastaven Předpovědní modul. Počkejte prosím, než se modul nahraje.',
  'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => 'Dokončeno:',
  'LBL_FORECAST_FOR' => 'List prognózy pro:',
  'LBL_FORECAST_HISTORY' => 'Předpovědi: Historie',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historie',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Nejlepší případ',
  'LBL_FORECAST_OPP_COMMIT' => 'Pravděpodobný případ',
  'LBL_FORECAST_OPP_COUNT' => 'Obchody',
  'LBL_FORECAST_OPP_WEIGH' => 'Vážená částka',
  'LBL_FORECAST_OPP_WORST' => 'Nejhorší případ',
  'LBL_FORECAST_SETTINGS' => 'Nastavení',
  'LBL_FORECAST_TIME_ID' => 'Časové období ID',
  'LBL_FORECAST_TITLE' => 'Předpověď: {0}',
  'LBL_FORECAST_TYPE' => 'Typ předpovědi',
  'LBL_FORECAST_USER' => 'Uživatel',
  'LBL_FS_CASCADE' => 'Kaskádovat?',
  'LBL_FS_CREATED_BY' => 'Vytvořeno',
  'LBL_FS_DATE_ENTERED' => 'Datum vložení',
  'LBL_FS_DATE_MODIFIED' => 'Datum upravení',
  'LBL_FS_DELETED' => 'Smazáno',
  'LBL_FS_END_DATE' => 'Datum ukončení',
  'LBL_FS_FORECAST_FOR' => 'Plán na:',
  'LBL_FS_FORECAST_START_DATE' => 'Předpověď datumu zahájení',
  'LBL_FS_MODULE_NAME' => 'Plán předpovědí',
  'LBL_FS_START_DATE' => 'Datum zahájení',
  'LBL_FS_STATUS' => 'Stav',
  'LBL_FS_TIMEPERIOD' => 'Časového období',
  'LBL_FS_TIMEPERIOD_ID' => 'ID časového období',
  'LBL_FS_USER_ID' => 'ID uživatele',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Přidělené částky pro %s',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Závazná Prognóza',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'Hodnota uzavřených obchodů v %s',
  'LBL_GRAPH_OPPS_LEGEND' => 'Uzavřený obchod',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Kvóta pro %s',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Kvóta:',
  'LBL_GRAPH_TITLE' => 'Historie předpovědi',
  'LBL_GROUP_BY' => 'Seskupit podle',
  'LBL_INCLUDED_TOTAL' => 'Součet',
  'LBL_LESS' => 'Méně',
  'LBL_LIKELY_CASE' => 'Pravděpodobný případ:',
  'LBL_LIST_FORM_TITLE' => 'Závazná prognóza',
  'LBL_LOADING' => 'Nahrávání',
  'LBL_LV_COMMIT' => 'Závazný Počet',
  'LBL_LV_COMMIT_DATE' => 'Datum schválení',
  'LBL_LV_OPPORTUNITIES' => 'Obchody',
  'LBL_LV_TIMPERIOD' => 'Časové období',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Datum ukončení',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Počáteční datum',
  'LBL_LV_TYPE' => 'Typ prognózy',
  'LBL_LV_WEIGH' => 'Vážený Počet',
  'LBL_MODIFIED_USER_ID' => 'Upraveno',
  'LBL_MODULE_NAME' => 'Předpovědi',
  'LBL_MODULE_NAME_SINGULAR' => 'Předpověď',
  'LBL_MODULE_TITLE' => 'Předpovědi',
  'LBL_MORE' => 'Více',
  'LBL_MY_OPPORTUNITIES' => 'Obchody',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Žádné aktivní časové období pro prognózy.',
  'LBL_OVERALL_TOTAL' => 'Celkem',
  'LBL_OW_ACCOUNTNAME' => 'Společnost',
  'LBL_OW_DESCRIPTION' => 'Popis',
  'LBL_OW_MODULE_TITLE' => 'List obchodů',
  'LBL_OW_NEXT_STEP' => 'Další krok',
  'LBL_OW_OPPORTUNITIES' => 'Obchod',
  'LBL_OW_PROBABILITY' => 'Pravděpodobnost',
  'LBL_OW_REVENUE' => 'Částka',
  'LBL_OW_TYPE' => 'Typ',
  'LBL_OW_WEIGHTED' => 'Vážený Počet',
  'LBL_PREVIOUS_COMMIT' => 'Poslední uložení"',
  'LBL_PRODUCT_ID' => 'ID produktu:',
  'LBL_PROJECTED' => 'Očekávaná',
  'LBL_QC_COMMIT_BEST_CASE' => 'Závazná částka (Nejlepší případ):',
  'LBL_QC_COMMIT_BUTTON' => 'Schválit',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Závazná částka (Pravděpodobný případ):',
  'LBL_QC_COMMIT_VALUE' => 'Schválit částku:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Závazná částka (Nejhorší případ):',
  'LBL_QC_DIRECT_FORECAST' => 'Moje přímá předpověď:',
  'LBL_QC_HEADER_DELIM' => 'Komu',
  'LBL_QC_LAST_BEST_CASE' => 'Posledná závazná částka (Nejlepší případ):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Posledná závazná částka:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Datum posledního schválení:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Posledná závazná částka  (Pravděpodobný případ):',
  'LBL_QC_LAST_WORST_CASE' => 'Posledná závazná částka  (Nejhorší případ):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Počet obchodů:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moje skupinová předpověď:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Kumulativní závazná částka (Nejlepší případ):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Kumulativní schálená částka',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Kumulativní závazná částka (Pravděpodobný případ):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Kumulativní závazná částka (Nejhorší případ):',
  'LBL_QC_TIME_PERIOD' => 'Časové období:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje předpověďi',
  'LBL_QC_WEIGHT_VALUE' => 'Vážená částka:',
  'LBL_QC_WORKSHEET_BUTTON' => 'List',
  'LBL_QUOTA' => 'Kvóta',
  'LBL_QUOTA_ID' => 'Kvóta ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Referovat (komu)',
  'LBL_RESET_CHECK' => 'Všechna data pracovního listu pro zvolené časové období a přihlášeného uživatele, budou odstraněny. Pokračovat?',
  'LBL_RESET_WOKSHEET' => 'Promazat pracovní list',
  'LBL_REVENUE' => 'Výnos',
  'LBL_SALES_STAGE' => 'Fáze',
  'LBL_SAVE_DRAFT' => 'Uložit návrh',
  'LBL_SAVE_WOKSHEET' => 'Uložit pracovní list',
  'LBL_SEARCH' => 'Zvolit',
  'LBL_SEARCH_LABEL' => 'Zvolit',
  'LBL_SHOW_CHART' => 'Prohlédnout tabulku',
  'LBL_SVFS_CASCADE' => 'Kaskádně k Reportům?',
  'LBL_SVFS_FORECASTDATE' => 'Naplánovat datum startu',
  'LBL_SVFS_HEADER' => 'Plán předpovědí:',
  'LBL_SVFS_STATUS' => 'Stav',
  'LBL_SVFS_USER' => 'Pro',
  'LBL_TIMEPERIOD_NAME' => 'Časové období',
  'LBL_TOTAL' => 'Celkem',
  'LBL_TOTAL_VALUE' => 'Ceklem:',
  'LBL_TP_QUOTA' => 'Kvóta:',
  'LBL_TREE_PARENT' => 'Předchůdce',
  'LBL_UP' => 'nahoru',
  'LBL_USER_NAME' => 'Uživatelské jméno',
  'LBL_VERSION' => 'Verze',
  'LBL_WK_REVISION' => 'Revize:',
  'LBL_WK_VERSION' => 'Verze',
  'LBL_WORKSHEET_AMOUNT' => 'Celkový očekávaný počet',
  'LBL_WORKSHEET_ID' => 'Sešit ID',
  'LBL_WORST_CASE' => 'Nejhorší případ:',
  'LB_FS_BEST_CASE' => 'Nejlepší případ',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Pravděpodobný případ',
  'LB_FS_WORST_CASE' => 'Nejhorší případ',
  'LNK_FORECAST_LIST' => 'Přehled histore Forecast',
  'LNK_NEW_OPPORTUNITY' => 'Vytvořit obchod',
  'LNK_NEW_TIMEPERIOD' => 'Vytvoření časového období',
  'LNK_QUOTA' => 'zobrazit obchody',
  'LNK_TIMEPERIOD_LIST' => 'Zobrazit časové periody',
  'LNK_UPD_FORECAST' => 'List předpovědí',
);
