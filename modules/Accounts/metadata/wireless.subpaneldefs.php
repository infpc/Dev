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



$layout_defs['Accounts'] = array(
	// list of what Subpanels to show in the DetailView 
	'subpanel_setup' => array(
		'calls' => array(
			'order' => 10,
			'module' => 'Calls',
			'get_subpanel_data' => 'calls',
			'title_key' => 'LBL_CALLS_SUBPANEL_TITLE',
		),
		'meetings' => array(
			'order' => 20,
			'module' => 'Meetings',
			'get_subpanel_data' => 'meetings',
			'title_key' => 'LBL_MEETINGS_SUBPANEL_TITLE',		
		),
		'tasks' => array(
			'order' => 30,
			'module' => 'Tasks',
			'get_subpanel_data' => 'tasks',
			'title_key' => 'LBL_TASKS_SUBPANEL_TITLE',		
		),
		'contacts'=> array(
			'order' => 40,
			'module' => 'Contacts',
			'get_subpanel_data' => 'contacts',
			'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',		
		),
		'leads'=> array(
			'order' => 50,
			'module' => 'Leads',
			'get_subpanel_data' => 'leads',
			'title_key' => 'LBL_LEADS_SUBPANEL_TITLE',
		),
		'cases'=> array(
			'order' => 60,
			'module' => 'Cases',
			'get_subpanel_data' => 'cases',
			'title_key' => 'LBL_CASES_SUBPANEL_TITLE',		
		),
		'opportunities'=> array(
			'order' => 70,
			'module' => 'Opportunities',
			'get_subpanel_data' => 'opportunities',
			'title_key' => 'LBL_OPPORTUNITIES_SUBPANEL_TITLE',		
		),
		'accounts'=> array(
			'order' => 80,
			'module' => 'Accounts',
			'get_subpanel_data' => 'members',
			'title_key' => 'LBL_MEMBER_ORG_SUBPANEL_TITLE',		
		),			
	),	
);
?>