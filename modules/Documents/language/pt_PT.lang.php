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
  'DEF_CREATE_LOG' => 'Documento Criado',
  'ERR_DELETE_CONFIRM' => 'Tem a certeza que deseja eliminar esta revisão do documento?',
  'ERR_DELETE_LATEST_VERSION' => 'Não tem permissão para eliminar a última revisão do documento.',
  'ERR_DOC_ACTIVE_DATE' => 'Data de Publicação',
  'ERR_DOC_EXP_DATE' => 'Data de Expiração',
  'ERR_DOC_NAME' => 'Nome do Documento',
  'ERR_DOC_VERSION' => 'Versão do Documento',
  'ERR_FILENAME' => 'Nome do Ficheiro',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'O utilizador tentou aceder uma API externa inválida ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'A validação de inicio de sessão para uma API externa falhou ({0})',
  'ERR_MISSING_FILE' => 'Falta um ficheiro neste documento, provavelmente devido a um erro durante o seu upload. Por favor tentar novamente o seu upload ou contacte o seu administrador.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Entidades',
  'LBL_ACTIVE_DATE' => 'Data de Publicação',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
  'LBL_CATEGORY' => 'Categoria',
  'LBL_CATEGORY_VALUE' => 'Categoria:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Não Especificado',
  'LBL_CHANGE_LOG' => 'Registo de Alterações:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_CONTRACTS' => 'Contratos',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contratos Relacionados',
  'LBL_CONTRACT_NAME' => 'Nome do Contacto',
  'LBL_CONTRACT_STATUS' => 'Estado do Contrato:',
  'LBL_CREATED' => 'Criado por',
  'LBL_CREATED_BY' => 'Criado por',
  'LBL_CREATED_USER' => 'Utilizador Criado',
  'LBL_DATE_ENTERED' => 'Data de Registo',
  'LBL_DATE_MODIFIED' => 'Data de Alteração',
  'LBL_DELETED' => 'Eliminado',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_DET_IS_TEMPLATE' => 'Modelo? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Documento Relacionado:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Revisão do Documento Relacionado:',
  'LBL_DET_TEMPLATE_TYPE' => 'Tipo de Documento:',
  'LBL_DOCUMENT' => 'Documento Relacionado',
  'LBL_DOCUMENT_ID' => 'Documento',
  'LBL_DOCUMENT_INFORMATION' => 'Informação do documento',
  'LBL_DOCUMENT_NAME' => 'Nome do Documento',
  'LBL_DOCUMENT_REVISION_ID' => 'Id da Revisão do Cliente',
  'LBL_DOC_ACTIVE_DATE' => 'Data de Publicação:',
  'LBL_DOC_DESCRIPTION' => 'Descrição:',
  'LBL_DOC_EXP_DATE' => 'Data de Expiração:',
  'LBL_DOC_ID' => 'ID do Documento Fonte',
  'LBL_DOC_NAME' => 'Nome Documento:',
  'LBL_DOC_REV_HEADER' => 'Revisões do Documento',
  'LBL_DOC_STATUS' => 'Estado:',
  'LBL_DOC_STATUS_ID' => 'Id do Estado:',
  'LBL_DOC_TYPE' => 'Origem',
  'LBL_DOC_TYPE_POPUP' => 'Seleccionar uma fonte para o qual este documento irá ser carregado e de onde estará disponível.',
  'LBL_DOC_URL' => 'URL do Documento Fonte',
  'LBL_DOC_VERSION' => 'Revisão:',
  'LBL_DOWNNLOAD_FILE' => 'Transferir Ficheiro:',
  'LBL_EXPIRATION_DATE' => 'Data de Expiração',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Os 20 ficheiros mais recentemente modificados são exibidos em ordem descendente na lista abaixo. Utilize a Pesquisa para encontrar outros ficheiros',
  'LBL_FILENAME' => 'Nome Ficheiro:',
  'LBL_FILE_EXTENSION' => 'Extensão do Ficheiro',
  'LBL_FILE_UPLOAD' => 'Ficheiro:',
  'LBL_FILE_URL' => 'URL do Ficheiro',
  'LBL_HOMEPAGE_TITLE' => 'Os Meus Documentos',
  'LBL_IS_TEMPLATE' => 'É um Modelo',
  'LBL_LASTEST_REVISION_NAME' => 'Nome da última revisão',
  'LBL_LAST_REV_CREATE_DATE' => 'Data da Criação da Última Revisão',
  'LBL_LAST_REV_CREATOR' => 'Revisão Criada por:',
  'LBL_LAST_REV_DATE' => 'Data da Revisão:',
  'LBL_LAST_REV_MIME_TYPE' => 'MIME type da última revisão',
  'LBL_LATEST_REVISION' => 'Última Revisão',
  'LBL_LATEST_REVISION_ID' => 'Id da última revisão',
  'LBL_LINKED_ID' => 'Id ligado',
  'LBL_LIST_ACTIVE_DATE' => 'Data de Publicação',
  'LBL_LIST_CATEGORY' => 'Categoria',
  'LBL_LIST_DOCUMENT' => 'Documento',
  'LBL_LIST_DOCUMENT_NAME' => 'Nome do Documento',
  'LBL_LIST_DOC_TYPE' => 'Origem',
  'LBL_LIST_DOWNLOAD' => 'Download',
  'LBL_LIST_EXP_DATE' => 'Data de Expiração',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nome do Ficheiro ( defined in ./include/SugarObjects/templates/file/language/pt_PT.lang.php )',
  'LBL_LIST_FILENAME' => 'Nome do Ficheiro',
  'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
  'LBL_LIST_IS_TEMPLATE' => 'Modelo?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
  'LBL_LIST_LAST_REV_DATE' => 'Data da Revisão',
  'LBL_LIST_LATEST_REVISION' => 'Última Revisão',
  'LBL_LIST_REVISION' => 'Revisão',
  'LBL_LIST_SELECTED_REVISION' => 'Revisão Seleccionada',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_SUBCATEGORY' => 'Subcategoria',
  'LBL_LIST_TEMPLATE_TYPE' => 'Tipo de Documento',
  'LBL_LIST_VIEW_DOCUMENT' => 'Exibir',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Modelo de Mail Merge:',
  'LBL_MIME' => 'Mime Type',
  'LBL_MODIFIED' => 'ID Alterado por',
  'LBL_MODIFIED_USER' => 'Modificado por',
  'LBL_MODULE_NAME' => 'Documentos',
  'LBL_MODULE_NAME_SINGULAR' => 'Documento',
  'LBL_MODULE_TITLE' => 'Documentos: Ecrã Principal',
  'LBL_NAME' => 'Nome do Documento',
  'LBL_NEW_FORM_TITLE' => 'Novo Documento',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produtos',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Cotações',
  'LBL_RELATED_DOCUMENT_ID' => 'ID do Documento Relacionado',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID da Revisão do Documento Relacionado',
  'LBL_REVISION' => 'Revisão',
  'LBL_REVISIONS' => 'Revisões',
  'LBL_REVISIONS_PANEL' => 'Detalhes da Revisão',
  'LBL_REVISIONS_SUBPANEL' => 'Revisões',
  'LBL_REVISION_NAME' => 'Número de Revisão',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nome do Documento',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Documentos',
  'LBL_SELECTED_REVISION_FILENAME' => 'Nome da revisão seleccionada',
  'LBL_SELECTED_REVISION_ID' => 'Id da revisão seleccionada',
  'LBL_SELECTED_REVISION_NAME' => 'Nome da Revisão Seleccionada',
  'LBL_SF_ACTIVE_DATE' => 'Data de Publicação:',
  'LBL_SF_CATEGORY' => 'Categoria:',
  'LBL_SF_DOCUMENT' => 'Documento:',
  'LBL_SF_EXP_DATE' => 'Data de Expiração:',
  'LBL_SF_SUBCATEGORY' => 'Subcategoria:',
  'LBL_STATUS' => 'Estado',
  'LBL_SUBCATEGORY' => 'Subcategoria',
  'LBL_SUBCATEGORY_VALUE' => 'Subcategoria:',
  'LBL_TEAM' => 'Equipa:',
  'LBL_TEMPLATE_TYPE' => 'Tipo de Documento',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Reversões',
  'LBL_TREE_TITLE' => 'Documentos',
  'LNK_DOCUMENT_LIST' => 'Lista de Documentos',
  'LNK_NEW_DOCUMENT' => 'Novo Documento',
  'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
);

