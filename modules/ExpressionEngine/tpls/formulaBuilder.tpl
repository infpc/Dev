{*
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

*}
<table width="100%" id="formulaBuilder">
	<tr style=""><td colspan=3 style="border-bottom:1px solid #AAA; padding-bottom:2px;">
		<textarea type="text" name="formulaInput" id="formulaInput" style="width:490px;height:120px;position: relative;z-index:50">{$formula}</textarea>
	</td></tr>
	<tr id="fb_browse_row">
		<td id="functionsList" width="200">
            <input id="formulaFuncSearch" style="width:200px" class="empty"
			    value="{sugar_translate module="ModuleBuilder" label="LBL_SEARCH_FUNCS"}"/>
            <span class="id-ff multiple"><button id="formulaFuncClear" class="button"
                onclick="var i = Dom.get('formulaFuncSearch'); i.value='';i.onkeyup();i.focus()">
            	{sugar_image image="id-ff-clear.png" name="id-ff-clear" height="14" width="14"}
			</button><div id="funcSearchResults"></div></span>
            <div id="functionsGrid"></div>
        </td>
		<td id="fieldsList" width="200">
			<input id="formulaFieldsSearch" style="width:200px" class="empty"
			     value="{sugar_translate module="ModuleBuilder" label="LBL_SEARCH_FIELDS"}"/>
			<span class="id-ff multiple"><button id="formulaFieldClear" class="button"
			    onclick="var i=Dom.get('formulaFieldsSearch'); i.value='';i.onkeyup();i.focus()">
		      {sugar_image image="id-ff-clear.png" name="id-ff-clear" height="14" width="14"}
			</button><div id="fieldSearchResults"></div></span>
			<div id="fieldsGrid"></div>
		</td>
	</tr>
</table>
<div style="width:100%;text-align:right">
<input type='button' class='button' name='formulacancelbtn' value='{sugar_translate module="ModuleBuilder" label="LBL_BTN_CANCEL"}'
	onclick="SUGAR.expressions.closeFormulaBuilder()" >
<input type='button' class='button' name='fomulaSaveButton' id="fomulaSaveButton" value='{sugar_translate module="ModuleBuilder" label="LBL_BTN_SAVE"}'
	onclick="if(SUGAR.expressions.saveCurrentExpression('{$target}', '{$returnType}'))SUGAR.expressions.closeFormulaBuilder()">
</div>
<script src="{sugar_getjspath file='include/javascript/jquery/markitup/jquery.markitup.js'}"></script>
<script src="{sugar_getjspath file='include/javascript/jquery/markitup/sets/default/set.js'}"></script>
<script src="{sugar_getjspath file='modules/ExpressionEngine/javascript/formulaBuilder.js'}"></script>
<script type="text/javascript">
ModuleBuilder.addToHead("{sugar_getjspath file='modules/ExpressionEngine/tpls/formulaBuilder.css'}", "css");
ModuleBuilder.addToHead("include/javascript/jquery/markitup/skins/simple/style.css", "css");
{literal}
var FBLoader = new YAHOO.util.YUILoader({
    require : ["formulabuilder"],
    loadOptional: true,
    skin: { base: 'blank', defaultSkin: '' },
    onSuccess: function(){SUGAR.expressions.initFormulaBuilder()},
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
FBLoader.addModule({
    name :"formulabuilder",
    type : "js",
    fullpath: "{/literal}{sugar_getjspath file='modules/ExpressionEngine/javascript/formulaBuilder.js'}{literal}",
    varName: "SUGAR.expressions.initFormulaBuilder",
    requires: ["layout", "element"]
});
{/literal}
var fieldsArray = {$Field_Array};
var returnType = '{$returnType}';
FBLoader.insert();
</script>