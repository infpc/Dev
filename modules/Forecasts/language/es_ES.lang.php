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
  'ERR_FORECAST_AMOUNT' => 'La Cantidad Realizada es un valor requerido, y debe ser numérico.',
  'LBL_ACTIONS' => 'Acciones',
  'LBL_AMOUNT' => 'Cantidad',
  'LBL_BASE_RATE' => '',
  'LBL_BEST_CASE' => 'Caso Mejor:',
  'LBL_BEST_CASE_BASE_CURRENCY' => '',
  'LBL_BEST_CASE_VALUE' => '',
  'LBL_CANCEL' => 'Cancelar',
  'LBL_CHANGES_BY' => '',
  'LBL_CHART_ADJUSTED' => '',
  'LBL_CHART_AMOUNT' => 'Cantidad',
  'LBL_CHART_FOOTER' => 'Historial de Previsiones<br/>Cantidad en Cuota vs Prevista vs Valor de Oportunidad Cerrada',
  'LBL_CHART_FORECAST_FOR' => '',
  'LBL_CHART_INCLUDED' => 'Incluido',
  'LBL_CHART_NOT_INCLUDED' => 'No Incluido',
  'LBL_CHART_OPTIONS' => 'Opciones de Gráficos',
  'LBL_CHART_TITLE' => 'Presupuestado vs. Realizado vs. Real',
  'LBL_CHART_TYPE' => 'Tipo',
  'LBL_CLOSED' => 'Cerrado',
  'LBL_COMMITTED_HISTORY_1_SHOWN' => '{0} {1}',
  'LBL_COMMITTED_HISTORY_2_SHOWN' => '{0} {1}, {2}',
  'LBL_COMMITTED_HISTORY_3_SHOWN' => '{0} {1}, {2}, y {3}',
  'LBL_COMMITTED_HISTORY_BEST_CHANGED' => '',
  'LBL_COMMITTED_HISTORY_BEST_SAME' => '',
  'LBL_COMMITTED_HISTORY_LIKELY_CHANGED' => '',
  'LBL_COMMITTED_HISTORY_LIKELY_SAME' => '',
  'LBL_COMMITTED_HISTORY_SETUP_FORECAST' => '',
  'LBL_COMMITTED_HISTORY_UPDATED_FORECAST' => '',
  'LBL_COMMITTED_HISTORY_WORST_CHANGED' => '',
  'LBL_COMMITTED_HISTORY_WORST_SAME' => '',
  'LBL_COMMITTED_MONTHS_AGO' => '',
  'LBL_COMMITTED_THIS_MONTH' => '',
  'LBL_COMMIT_AMOUNT' => 'Suma de valores Realizados.',
  'LBL_COMMIT_HEADER' => 'Realización de Previsión',
  'LBL_COMMIT_MESSAGE' => '¿Quiere introducir estas cantidades como realizadas?',
  'LBL_COMMIT_NOTE' => 'Introduzca las cantidades que desee realizar en el Período de Tiempo seleccionado:',
  'LBL_COMMIT_STAGE' => '',
  'LBL_COPY' => 'Copiar Valores',
  'LBL_COPY_AMOUNT' => 'Cantidad total',
  'LBL_COPY_FROM' => 'Copiar valor de:',
  'LBL_COPY_WEIGH_AMOUNT' => 'Cantidades totales ponderadas',
  'LBL_CREATED_BY' => 'Creado por',
  'LBL_CURRENCY' => 'Moneda:',
  'LBL_CURRENCY_ID' => 'ID de Moneda',
  'LBL_CURRENCY_RATE' => 'Tipo de Cambio',
  'LBL_DATA_SET' => 'Conjunto de Datos:',
  'LBL_DATE_CLOSED' => 'Cierre Previsto:',
  'LBL_DATE_COMMITTED' => 'Fecha Realización',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_DELETED' => 'Eliminado',
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
  'LBL_DOWN' => 'Abajo',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunidades de la Previsión',
  'LBL_DV_FORECAST_PERIOD' => 'Período de Tiempo de la Previsión',
  'LBL_DV_FORECAST_ROLLUP' => 'Previsión Dinámica',
  'LBL_DV_HEADER' => 'Previsiones: Hoja de cálculo',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimas Cantidades Realizadas:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Fecha de Realización:',
  'LBL_DV_MY_FORECASTS' => 'Mis Previsiones',
  'LBL_DV_MY_TEAM' => 'Previsiones de mi Equipo',
  'LBL_DV_TIMEPERIOD' => 'Período de Tiempo:',
  'LBL_DV_TIMEPERIODS' => 'Períodos de Tiempo:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rango de Fechas:',
  'LBL_EDITABLE_INVALID' => '',
  'LBL_EDITABLE_INVALID_RANGE' => 'El valor se debe ser entre {0} y {1}',
  'LBL_ERROR_NOT_MANAGER' => '',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Oportunidades Previstas',
  'LBL_EXPORT_CSV' => 'Exportar CSV',
  'LBL_FC_START_DATE' => 'Fecha de Inicio',
  'LBL_FC_USER' => 'Programar Para',
  'LBL_FDR_ADJ_AMOUNT' => 'Cantidad Ajustada',
  'LBL_FDR_COMMIT' => 'Cantidad Realizada',
  'LBL_FDR_C_BEST_CASE' => 'Caso Mejor',
  'LBL_FDR_C_LIKELY_CASE' => 'Caso Probable',
  'LBL_FDR_C_WORST_CASE' => 'Caso Peor',
  'LBL_FDR_DATE_COMMIT' => 'Fecha de Realización',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunidades previstas:',
  'LBL_FDR_USER_NAME' => 'Informador Directo',
  'LBL_FDR_WEIGH' => 'Cantidad Ponderada de oportunidades:',
  'LBL_FDR_WK_BEST_CASE' => 'Est. Caso Mejor',
  'LBL_FDR_WK_LIKELY_CASE' => 'Est. Caso Probable',
  'LBL_FDR_WK_WORST_CASE' => 'Est. Caso Peor',
  'LBL_FILTERS' => 'Filtros',
  'LBL_FMT_DIRECT_FORECAST' => '(Directa)',
  'LBL_FMT_ROLLUP_FORECAST' => '(Dinámica)',
  'LBL_FORECAST' => 'Previsión',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_1' => '',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_2' => '',
  'LBL_FORECASTS_CONFIG_ADMIN_SPLASH_3' => '',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_RANGES' => 'Rangos',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_SCENARIOS' => 'Escenarios',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => 'Períodos de Tiempo',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_VARIABLES' => 'Variables',
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
  'LBL_FORECASTS_CONFIG_START_DATE' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_BACKWARD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIODS_FORWARD' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_DESC' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_SETUP_NOTICE' => '',
  'LBL_FORECASTS_CONFIG_TIMEPERIOD_TYPE' => '',
  'LBL_FORECASTS_CONFIG_TITLE' => '',
  'LBL_FORECASTS_CONFIG_USER_SPLASH' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES' => 'Variables',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_LOST_STAGE' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_CLOSED_WON_STAGE' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_DESC' => '',
  'LBL_FORECASTS_CONFIG_VARIABLES_FORMULA_DESC' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_LIKELY_INFO' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_BEST' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_LIKELY' => '',
  'LBL_FORECASTS_CONFIG_WORKSHEET_SCENARIOS_WORST' => '',
  'LBL_FORECASTS_TABBED_CONFIG_SUCCESS_MESSAGE' => '',
  'LBL_FORECASTS_WIZARD_REFRESH_NOTICE' => '',
  'LBL_FORECASTS_WIZARD_SUCCESS_MESSAGE' => '',
  'LBL_FORECASTS_WIZARD_SUCCESS_TITLE' => '',
  'LBL_FORECAST_FOR' => 'Hoja de Previsiones para:',
  'LBL_FORECAST_HISTORY' => 'Previsiones: Historial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historial',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => 'Caso Mejor',
  'LBL_FORECAST_OPP_COMMIT' => 'Caso Probable',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunidades',
  'LBL_FORECAST_OPP_WEIGH' => 'Cantidad Ponderada',
  'LBL_FORECAST_OPP_WORST' => 'Caso Peor',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => '',
  'LBL_FORECAST_SETTINGS' => 'Configuración',
  'LBL_FORECAST_TIME_ID' => 'ID Período de Tiempo',
  'LBL_FORECAST_TITLE' => 'Previsión: {0}',
  'LBL_FORECAST_TYPE' => 'Tipo de Previsión',
  'LBL_FORECAST_USER' => 'Usuario',
  'LBL_FS_CASCADE' => '¿En cascada?',
  'LBL_FS_CREATED_BY' => 'Creado por',
  'LBL_FS_DATE_ENTERED' => 'Fecha Creación',
  'LBL_FS_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_FS_DELETED' => 'Eliminado',
  'LBL_FS_END_DATE' => 'Fecha de Fin',
  'LBL_FS_FORECAST_FOR' => 'Planificar para:',
  'LBL_FS_FORECAST_START_DATE' => 'Fecha de Inicio de la Previsión',
  'LBL_FS_MODULE_NAME' => 'Planificación de Previsión',
  'LBL_FS_START_DATE' => 'Fecha de Inicio',
  'LBL_FS_STATUS' => 'Estado',
  'LBL_FS_TIMEPERIOD' => 'Período de Tiempo',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Período de Tiempo',
  'LBL_FS_USER_ID' => 'ID Usuario',
  'LBL_GRAPH_COMMIT_ALTTEXT' => 'Cantidad Realizada para %s',
  'LBL_GRAPH_COMMIT_LEGEND' => 'Previsión Realizada',
  'LBL_GRAPH_OPPS_ALTTEXT' => 'El valor de las oportunidades cerradas en %s',
  'LBL_GRAPH_OPPS_LEGEND' => 'Oportunidades Cerradas',
  'LBL_GRAPH_QUOTA_ALTTEXT' => 'Cuota para %s',
  'LBL_GRAPH_QUOTA_LEGEND' => 'Cuota',
  'LBL_GRAPH_TITLE' => 'Historial de Previsiones',
  'LBL_GROUP_BY' => 'Agrupar Por',
  'LBL_INCLUDED_TOTAL' => 'Total Incluido',
  'LBL_LESS' => 'Menos',
  'LBL_LIKELY_CASE' => 'Caso Probable:',
  'LBL_LIKELY_CASE_BASE_CURRENCY' => '',
  'LBL_LIKELY_CASE_VALUE' => '',
  'LBL_LIST_FORM_TITLE' => 'Previsiones Realizadas',
  'LBL_LOADING' => 'Cargando',
  'LBL_LOADING_COMMIT_HISTORY' => '',
  'LBL_LV_COMMIT' => 'Cantidad Realizada',
  'LBL_LV_COMMIT_DATE' => 'Fecha de Realización',
  'LBL_LV_OPPORTUNITIES' => 'Oportunidades',
  'LBL_LV_TIMPERIOD' => 'Período de Tiempo',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Fecha de Fin',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Fecha de Inicio',
  'LBL_LV_TYPE' => 'Tipo de Previsión',
  'LBL_LV_WEIGH' => 'Cantidad Ponderada',
  'LBL_MODIFIED_USER_ID' => 'Modificado por',
  'LBL_MODULE_NAME' => 'Previsiones',
  'LBL_MODULE_NAME_SINGULAR' => 'Previsión',
  'LBL_MODULE_TITLE' => 'Previsiones',
  'LBL_MORE' => 'Más',
  'LBL_MY_OPPORTUNITIES' => 'Oportunidades ({0})',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'No hay ningún período de tiempo Activo para realizar una Previsión.',
  'LBL_OVERALL_TOTAL' => '',
  'LBL_OW_ACCOUNTNAME' => 'Cuenta',
  'LBL_OW_DESCRIPTION' => 'Descripción',
  'LBL_OW_MODULE_TITLE' => 'Hoja de Oportunidad',
  'LBL_OW_NEXT_STEP' => 'Siguiente Paso',
  'LBL_OW_OPPORTUNITIES' => 'Oportunidad',
  'LBL_OW_PROBABILITY' => 'Probabilidad',
  'LBL_OW_REVENUE' => 'Cantidad',
  'LBL_OW_TYPE' => 'Tipo',
  'LBL_OW_WEIGHTED' => 'Cantidad Ponderada',
  'LBL_PIPELINE_OPPORTUNITIES' => '',
  'LBL_PIPELINE_REVENUE' => '',
  'LBL_PIPELINE_SIZE' => '',
  'LBL_PREVIOUS_COMMIT' => '',
  'LBL_PRODUCT_ID' => 'ID de Producto',
  'LBL_PROJECTED' => 'Proyectado',
  'LBL_QC_COMMIT_BEST_CASE' => 'Cantidad Realizada (Caso Mejor):',
  'LBL_QC_COMMIT_BUTTON' => 'Realizar',
  'LBL_QC_COMMIT_LIKELY_CASE' => 'Cantidad Realizada (Caso Probable):',
  'LBL_QC_COMMIT_VALUE' => 'Cantidad Realizada:',
  'LBL_QC_COMMIT_WORST_CASE' => 'Cantidad Realizada (Caso Peor):',
  'LBL_QC_DIRECT_FORECAST' => 'Mi Previsión Directa:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_QC_LAST_BEST_CASE' => 'Cantidad Última Realización (Caso Mejor):',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última Cantidad Realizada:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Fecha de Realización:',
  'LBL_QC_LAST_LIKELY_CASE' => 'Cantidad Última Realización (Caso Probable):',
  'LBL_QC_LAST_WORST_CASE' => 'Cantidad Última Realización (Caso Peor):',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Cuenta de Oportunidades:',
  'LBL_QC_ROLLUP_FORECAST' => 'Mi Previsión de Grupo:',
  'LBL_QC_ROLL_BEST_VALUE' => 'Cantidad Dinámica Realizada (Caso Mejor):',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Cantidad Realizada en Dinámica:',
  'LBL_QC_ROLL_LIKELY_VALUE' => 'Cantidad Dinámica Realizada (Caso Probable):',
  'LBL_QC_ROLL_WORST_VALUE' => 'Cantidad Dinámica Realizada (Caso Peor):',
  'LBL_QC_TIME_PERIOD' => 'Período de Tiempo:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mis Previsiones',
  'LBL_QC_WEIGHT_VALUE' => 'Cantidad Ponderada:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Hoja de cálculo',
  'LBL_QUOTA' => 'Cuota',
  'LBL_QUOTA_ID' => 'ID de Cuota',
  'LBL_REPORTS_TO_USER_NAME' => 'Informa A',
  'LBL_RESET_CHECK' => 'Todos los datos de la hoja de cálculo para el período de tiempo seleccionado y para el usuario que ha iniciado la sesión se eliminarán, ¿desea continuar?',
  'LBL_RESET_WOKSHEET' => 'Reiniciar Hoja de cálculo',
  'LBL_REVENUE' => 'Ingresos',
  'LBL_SALES_STAGE' => 'Etapa',
  'LBL_SAVE_DRAFT' => 'Guardar Borrador',
  'LBL_SAVE_WOKSHEET' => 'Guardar Hoja de cálculo',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_SHOW_CHART' => 'Ver Gráfico',
  'LBL_SVFS_CASCADE' => '¿Propagar en cascada a Informes?',
  'LBL_SVFS_FORECASTDATE' => 'Fecha de Inicio de Planificación',
  'LBL_SVFS_HEADER' => 'Planificación de la Previsión:',
  'LBL_SVFS_STATUS' => 'Estado',
  'LBL_SVFS_USER' => 'Para',
  'LBL_TIMEPERIOD_NAME' => 'Período de Tiempo',
  'LBL_TOTAL' => 'Total',
  'LBL_TOTAL_VALUE' => 'Totales:',
  'LBL_TP_QUOTA' => 'Cuota:',
  'LBL_TREE_PARENT' => 'Padre',
  'LBL_UNAUTH_FORECASTS' => '',
  'LBL_UP' => 'Arriba',
  'LBL_USER_NAME' => 'Nombre de Usuario',
  'LBL_VERSION' => 'Versión',
  'LBL_WK_REVISION' => 'Revisión:',
  'LBL_WK_VERSION' => 'Versión',
  'LBL_WORKSHEET_AMOUNT' => 'Cantidades totales estimadas',
  'LBL_WORKSHEET_COMMIT_ALERT' => '',
  'LBL_WORKSHEET_COMMIT_CONFIRM' => '',
  'LBL_WORKSHEET_EXPORT_CONFIRM' => '',
  'LBL_WORKSHEET_ID' => '',
  'LBL_WORKSHEET_SAVE_CONFIRM' => '',
  'LBL_WORKSHEET_SAVE_CONFIRM_UNLOAD' => '',
  'LBL_WORST_CASE' => 'Caso Peor:',
  'LBL_WORST_CASE_BASE_CURRENCY' => '',
  'LBL_WORST_CASE_VALUE' => '',
  'LB_FS_BEST_CASE' => 'Caso Mejor',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => 'Caso Probable',
  'LB_FS_WORST_CASE' => 'Caso Peor',
  'LNK_FORECASTS_CONFIG_ADMIN_SPLASH_HERE' => 'aquí.',
  'LNK_FORECAST_LIST' => 'Ver Historial de Previsiones',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_TIMEPERIOD' => 'Crear Período de Tiempo',
  'LNK_QUOTA' => 'Ver Cuotas',
  'LNK_TIMEPERIOD_LIST' => 'Ver Períodos de Tiempo',
  'LNK_UPD_FORECAST' => 'Hoja de Previsión',
);
