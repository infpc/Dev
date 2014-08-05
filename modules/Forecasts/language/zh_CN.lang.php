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
  'ERR_FORECAST_AMOUNT' => '必须提交数字金额。',
  'LBL_ACTIONS' => '操作',
  'LBL_AMOUNT' => '数量',
  'LBL_BASE_RATE' => '基本利率',
  'LBL_BEST_CASE' => '最好情形:',
  'LBL_BEST_CASE_VALUE' => '最佳(已调整)',
  'LBL_CANCEL' => '取消',
  'LBL_CHART_FOOTER' => '销售预测历史<br />定额 vs. 预测金额 vs. 完成商业机会价值',
  'LBL_CHART_OPTIONS' => '图表选项',
  'LBL_CHART_TITLE' => '配额 vs. 承诺 vs.实际',
  'LBL_CHART_TYPE' => '图表类型',
  'LBL_CLOSED' => '已关闭',
  'LBL_COMMIT_AMOUNT' => '承诺价值总和。',
  'LBL_COMMIT_HEADER' => '销售预测提交',
  'LBL_COMMIT_MESSAGE' => '您确定要承诺这些金额吗?',
  'LBL_COMMIT_NOTE' => '为选择的时段输入承诺的金额:',
  'LBL_COPY' => '复制价值',
  'LBL_COPY_AMOUNT' => '总金额',
  'LBL_COPY_FROM' => '复制价值从:',
  'LBL_COPY_WEIGH_AMOUNT' => '总加权金额',
  'LBL_CREATED_BY' => '创建人',
  'LBL_CURRENCY' => '货币:',
  'LBL_CURRENCY_ID' => '货币编号',
  'LBL_CURRENCY_RATE' => '汇率',
  'LBL_DATE_CLOSED' => '预期完成日期：',
  'LBL_DATE_COMMITTED' => '提交日期',
  'LBL_DATE_ENTERED' => '输入日期',
  'LBL_DATE_MODIFIED' => '修改日期',
  'LBL_DELETED' => '已删除',
  'LBL_DOWN' => '向下',
  'LBL_DV_FORECAST_OPPORTUNITY' => '预测商业机会',
  'LBL_DV_FORECAST_PERIOD' => '预测时段',
  'LBL_DV_FORECAST_ROLLUP' => '预测汇总',
  'LBL_DV_HEADER' => '销售预测:工作单',
  'LBL_DV_LAST_COMMIT_AMOUNT' => '上一次承诺金额:',
  'LBL_DV_LAST_COMMIT_DATE' => '上次承诺日期:',
  'LBL_DV_MY_FORECASTS' => '我的预测',
  'LBL_DV_MY_TEAM' => '我的团队预测',
  'LBL_DV_TIMEPERIOD' => '时间段:',
  'LBL_DV_TIMEPERIODS' => '时间段:',
  'LBL_DV_TIMPERIOD_DATES' => '日期范围:',
  'LBL_FC_START_DATE' => '开始日期',
  'LBL_FC_USER' => '安排为',
  'LBL_FDR_ADJ_AMOUNT' => '调整后金额',
  'LBL_FDR_COMMIT' => '已承诺金额',
  'LBL_FDR_C_BEST_CASE' => '最好情形',
  'LBL_FDR_C_LIKELY_CASE' => '可能情形',
  'LBL_FDR_C_WORST_CASE' => '最坏情形',
  'LBL_FDR_DATE_COMMIT' => '承诺日期',
  'LBL_FDR_OPPORTUNITIES' => '销售预测中的商业机会:',
  'LBL_FDR_USER_NAME' => '直接报告人',
  'LBL_FDR_WEIGH' => '加权商业机会金额:',
  'LBL_FDR_WK_BEST_CASE' => '估计最好情形',
  'LBL_FDR_WK_LIKELY_CASE' => '估计可能情形',
  'LBL_FDR_WK_WORST_CASE' => '估计最坏情形',
  'LBL_FILTERS' => '过滤',
  'LBL_FMT_DIRECT_FORECAST' => '(直属)',
  'LBL_FMT_ROLLUP_FORECAST' => '(汇总)',
  'LBL_FORECASTS_CONFIG_BREADCRUMB_TIMEPERIODS' => '时间周期',
  'LBL_FORECAST_FOR' => '销售预测工作单为:',
  'LBL_FORECAST_HISTORY' => '预测:历史',
  'LBL_FORECAST_HISTORY_TITLE' => '历史',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_BEST_CASE' => '最好情形',
  'LBL_FORECAST_OPP_COMMIT' => '可能情形',
  'LBL_FORECAST_OPP_COUNT' => '商业机会',
  'LBL_FORECAST_OPP_WEIGH' => '加权金额',
  'LBL_FORECAST_OPP_WORST' => '最坏情形',
  'LBL_FORECAST_SETTINGS' => '设置',
  'LBL_FORECAST_TIME_ID' => '时段编号',
  'LBL_FORECAST_TITLE' => '销售预测',
  'LBL_FORECAST_TYPE' => '销售预测类型',
  'LBL_FORECAST_USER' => '用户',
  'LBL_FS_CASCADE' => '级联?',
  'LBL_FS_CREATED_BY' => '创建人',
  'LBL_FS_DATE_ENTERED' => '输入日期',
  'LBL_FS_DATE_MODIFIED' => '修改日期',
  'LBL_FS_DELETED' => '已删除',
  'LBL_FS_END_DATE' => '结束日期',
  'LBL_FS_FORECAST_FOR' => '安排:',
  'LBL_FS_FORECAST_START_DATE' => '预测开始日期',
  'LBL_FS_MODULE_NAME' => '销售预测安排',
  'LBL_FS_START_DATE' => '开始日期',
  'LBL_FS_STATUS' => '状态',
  'LBL_FS_TIMEPERIOD' => '时段',
  'LBL_FS_TIMEPERIOD_ID' => '时段编号',
  'LBL_FS_USER_ID' => '用户编号',
  'LBL_GRAPH_COMMIT_ALTTEXT' => '提交定额为%s',
  'LBL_GRAPH_COMMIT_LEGEND' => '已提交的销售预测',
  'LBL_GRAPH_OPPS_ALTTEXT' => '完成商业机会的价值是%s',
  'LBL_GRAPH_OPPS_LEGEND' => '完成的商业机会',
  'LBL_GRAPH_QUOTA_ALTTEXT' => '定额为%s',
  'LBL_GRAPH_QUOTA_LEGEND' => '定额',
  'LBL_GRAPH_TITLE' => '销售预测历史',
  'LBL_GROUP_BY' => '分组',
  'LBL_LESS' => '少于',
  'LBL_LIKELY_CASE' => '可能情形:',
  'LBL_LIKELY_CASE_VALUE' => '可能(已调整)',
  'LBL_LIST_FORM_TITLE' => '提交销售预测',
  'LBL_LOADING' => '加载中 ...',
  'LBL_LOADING_COMMIT_HISTORY' => '指派历史',
  'LBL_LV_COMMIT' => '已提交金额',
  'LBL_LV_COMMIT_DATE' => '提交日期',
  'LBL_LV_OPPORTUNITIES' => '商业机会',
  'LBL_LV_TIMPERIOD' => '时段',
  'LBL_LV_TIMPERIOD_END_DATE' => '结束日期',
  'LBL_LV_TIMPERIOD_START_DATE' => '开始日期',
  'LBL_LV_TYPE' => '销售预测类型',
  'LBL_LV_WEIGH' => '加权金额',
  'LBL_MODIFIED_USER_ID' => '修改人',
  'LBL_MODULE_NAME' => '销售预测',
  'LBL_MODULE_NAME_SINGULAR' => '销售预测',
  'LBL_MODULE_TITLE' => '销售预测',
  'LBL_MORE' => '更多',
  'LBL_NO_ACTIVE_TIMEPERIOD' => '没有可用的销售预测时段。',
  'LBL_OW_ACCOUNTNAME' => '帐户',
  'LBL_OW_DESCRIPTION' => '说明',
  'LBL_OW_MODULE_TITLE' => '商业机会工作单',
  'LBL_OW_NEXT_STEP' => '下一步',
  'LBL_OW_OPPORTUNITIES' => '商业机会',
  'LBL_OW_PROBABILITY' => '概率',
  'LBL_OW_REVENUE' => '金额',
  'LBL_OW_TYPE' => '类型',
  'LBL_OW_WEIGHTED' => '加权金额',
  'LBL_PRODUCT_ID' => '产品编号：',
  'LBL_QC_COMMIT_BEST_CASE' => '承诺金额(最好情形):',
  'LBL_QC_COMMIT_BUTTON' => '承诺',
  'LBL_QC_COMMIT_LIKELY_CASE' => '承诺金额(可能情形):',
  'LBL_QC_COMMIT_VALUE' => '承诺金额:',
  'LBL_QC_COMMIT_WORST_CASE' => '承诺金额(最坏情形):',
  'LBL_QC_DIRECT_FORECAST' => '我的直接预测:',
  'LBL_QC_HEADER_DELIM' => '至',
  'LBL_QC_LAST_BEST_CASE' => '上次承诺金额(最好情形):',
  'LBL_QC_LAST_COMMIT_VALUE' => '上次承诺金额:',
  'LBL_QC_LAST_DATE_COMMITTED' => '上次承诺日期:',
  'LBL_QC_LAST_LIKELY_CASE' => '上次承诺金额(可能情形):',
  'LBL_QC_LAST_WORST_CASE' => '上次承诺金额(最坏情形):',
  'LBL_QC_OPPORTUNITY_COUNT' => '商业机会总数:',
  'LBL_QC_ROLLUP_FORECAST' => '我的组销售预测:',
  'LBL_QC_ROLL_BEST_VALUE' => '汇总承诺金额(最好情形):',
  'LBL_QC_ROLL_COMMIT_VALUE' => '汇总承诺金额:',
  'LBL_QC_ROLL_LIKELY_VALUE' => '汇总承诺金额(可能情形):',
  'LBL_QC_ROLL_WORST_VALUE' => '汇总承诺金额(最坏情形):',
  'LBL_QC_TIME_PERIOD' => '时段:',
  'LBL_QC_UPCOMING_FORECASTS' => '我的销售预测:',
  'LBL_QC_WEIGHT_VALUE' => '加权金额:',
  'LBL_QC_WORKSHEET_BUTTON' => '工作单',
  'LBL_QUOTA' => '定额',
  'LBL_REPORTS_TO_USER_NAME' => '汇报人',
  'LBL_RESET_CHECK' => '所有选择时段中的工作单数据和登录的用户将被移除，继续?',
  'LBL_RESET_WOKSHEET' => '重设工作单',
  'LBL_REVENUE' => '收入',
  'LBL_SALES_STAGE' => '销售阶段：',
  'LBL_SAVE_DRAFT' => '保存草稿',
  'LBL_SAVE_WOKSHEET' => '保存工作单',
  'LBL_SEARCH' => '选择',
  'LBL_SEARCH_LABEL' => '选择',
  'LBL_SHOW_CHART' => '查看图表',
  'LBL_SVFS_CASCADE' => '级联报告?',
  'LBL_SVFS_FORECASTDATE' => '安排开始日期',
  'LBL_SVFS_HEADER' => '销售预测安排:',
  'LBL_SVFS_STATUS' => '状态',
  'LBL_SVFS_USER' => '为',
  'LBL_TIMEPERIOD_NAME' => '时段',
  'LBL_TOTAL' => '总计',
  'LBL_TOTAL_VALUE' => '总计:',
  'LBL_TP_QUOTA' => '定额:',
  'LBL_TREE_PARENT' => '父类',
  'LBL_UP' => '向上',
  'LBL_USER_NAME' => '用户名',
  'LBL_VERSION' => '版本',
  'LBL_WK_REVISION' => '修订版本',
  'LBL_WK_VERSION' => '版本',
  'LBL_WORKSHEET_AMOUNT' => '总估算金额',
  'LBL_WORST_CASE' => '最坏情形:',
  'LBL_WORST_CASE_VALUE' => '最坏(已调整)',
  'LB_FS_BEST_CASE' => '最好情形',
  'LB_FS_KEY' => 'ID',
  'LB_FS_LIKELY_CASE' => '可能情形',
  'LB_FS_WORST_CASE' => '最坏情形',
  'LNK_FORECAST_LIST' => '销售预测历史',
  'LNK_NEW_OPPORTUNITY' => '新增商业机会',
  'LNK_NEW_TIMEPERIOD' => '新增时段',
  'LNK_QUOTA' => '定额',
  'LNK_TIMEPERIOD_LIST' => '时段',
  'LNK_UPD_FORECAST' => '预测工作单',
);
