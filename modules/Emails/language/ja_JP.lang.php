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
  'ERR_ARCHIVE_EMAIL' => 'エラー: 保存するメールを選択してください。',
  'ERR_DATE_START' => '開始日',
  'ERR_DELETE_RECORD' => '取引先を削除するにはレコード番号を指定する必要があります。',
  'ERR_INVALID_REQUIRED_FIELDS' => '不正な必須フィールドです',
  'ERR_MISSING_REQUIRED_FIELDS' => '必須フィールドが不足しています',
  'ERR_NOT_ADDRESSED' => 'EメールにはTo, Cc, BCCアドレスが必要です',
  'ERR_TIME_SENT' => '送信時間',
  'ERR_TIME_START' => '開始時間',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
  'LBL_ACTIVITIES_REPORTS' => '活動レポート',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => '受信者を検索するには、Eメールアドレス、姓、または名を入力してください。',
  'LBL_ADD_ANOTHER_FILE' => '別のファイルを追加',
  'LBL_ADD_BCC' => 'Bccに追加',
  'LBL_ADD_CC' => 'Ccに追加',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_ADD_DASHLETS' => 'ダッシュレットを追加',
  'LBL_ADD_DOCUMENT' => 'ドキュメントを追加',
  'LBL_ADD_ENTRIES' => 'エントリを追加',
  'LBL_ADD_FILE' => 'ファイルを追加',
  'LBL_ADD_INBOUND_ACCOUNT' => '追加',
  'LBL_ADD_OUTBOUND_ACCOUNT' => '追加',
  'LBL_ADD_TO_ADDR' => '追加->',
  'LBL_ALL' => 'すべての',
  'LBL_ARCHIVED_EMAIL' => 'メールアーカイブ',
  'LBL_ARCHIVED_EMAILS_CREATE' => '作成',
  'LBL_ARCHIVED_MODULE_NAME' => 'Eメール',
  'LBL_ARCHIVED_MODULE_NAME_SINGULAR' => '新規作成されたアーカイブEメール',
  'LBL_ASSIGNED_TO' => 'アサイン先:',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => '選択された結果のアサイン先:',
  'LBL_ASSIGN_WARN' => '２つのオプションがすべて選択されていることを確認してください。',
  'LBL_ATTACHMENT' => '添付ファイル',
  'LBL_ATTACHMENTS' => '添付:',
  'LBL_BACK_TO_GROUP' => 'グループ受信箱へ戻る',
  'LBL_BCC' => 'Bcc:',
  'LBL_BODY' => '本文:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'バグトラッカー',
  'LBL_BUTTON_CHECK' => 'Eメール確認',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_CHECK_TITLE' => '新規メールをチェック',
  'LBL_BUTTON_CREATE' => '作成',
  'LBL_BUTTON_DISTRIBUTE' => 'アサイン',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'アサイン[Alt+A]',
  'LBL_BUTTON_EDIT' => '編集',
  'LBL_BUTTON_FORWARD' => '転送',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_FORWARD_TITLE' => 'このメールを転送[Alt+F]',
  'LBL_BUTTON_GRAB' => 'グループから取る',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_BUTTON_GRAB_TITLE' => 'グループから取る[Alt+T]',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_RAW_LABEL' => '元データ表示',
  'LBL_BUTTON_RAW_LABEL_HIDE' => '元データ非表示',
  'LBL_BUTTON_RAW_TITLE' => '元のメッセージを表示[Alt+E]',
  'LBL_BUTTON_REPLY' => '返信',
  'LBL_BUTTON_REPLY_ALL' => '全員に返信',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_REPLY_TITLE' => '返信[Alt+R]',
  'LBL_CASES_SUBPANEL_TITLE' => 'ケース',
  'LBL_CC' => 'Cc:',
  'LBL_CHECKEMAIL' => 'Eメール確認',
  'LBL_CHECKING_ACCOUNT' => 'アカウントのチェック中',
  'LBL_CHECK_ATTACHMENTS' => '添付ファイルをチェックしてください!',
  'LBL_CHECK_INLINE' => '正しい',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Eメールプロバイダを選択してください。',
  'LBL_CLOSE' => '閉じる',
  'LBL_COLON' => ':',
  'LBL_COMPOSEEMAIL' => 'Eメール作成',
  'LBL_COMPOSE_MODULE_NAME' => 'Eメール作成',
  'LBL_COMPOSE_MODULE_NAME_SINGULAR' => 'Eメール作成',
  'LBL_CONFIRM_DELETE' => '本当にこのフォルダを削除してよいですか？',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'Eメール宛先',
  'LBL_CONTACT_FIRST_NAME' => '取引先担当者の名',
  'LBL_CONTACT_LAST_NAME' => '取引先担当者の姓',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_CREATED_BY' => '作成者',
  'LBL_CREATE_BUG' => '不具合作成',
  'LBL_CREATE_BUGS' => '不具合作成',
  'LBL_CREATE_CASE' => 'ケース作成',
  'LBL_CREATE_CASES' => 'ケース作成',
  'LBL_CREATE_CONTACT' => '取引先担当者作成',
  'LBL_CREATE_CONTACTS' => '取引先担当者作成',
  'LBL_CREATE_LEAD' => 'リード作成',
  'LBL_CREATE_LEADS' => 'リード作成',
  'LBL_CREATE_TASK' => 'タスク作成',
  'LBL_CREATE_TASKS' => 'タスク作成',
  'LBL_DATE' => '送信日:',
  'LBL_DATE_AND_TIME' => '送信日時:',
  'LBL_DATE_CREATED' => '作成日',
  'LBL_DATE_MODIFIED' => '更新日',
  'LBL_DATE_SENT' => '送信日:',
  'LBL_DELETE_FROM_SERVER' => 'サーバからメッセージを削除',
  'LBL_DELETE_INLINE' => '削除',
  'LBL_DESCRIPTION' => '詳細',
  'LBL_DIST_TITLE' => 'アサイメント',
  'LBL_EDIT_ALT_TEXT' => '代替テキストの編集',
  'LBL_EDIT_LAYOUT' => 'レイアウト編集',
  'LBL_EDIT_MY_SETTINGS' => '設定の編集',
  'LBL_EMAIL' => 'Eメール:',
  'LBL_EMAILSETTINGS' => 'メール設定',
  'LBL_EMAILS_ACCOUNTS_REL' => 'Eメール: 取引先',
  'LBL_EMAILS_BUGS_REL' => 'Eメール: 不具合',
  'LBL_EMAILS_CASES_REL' => 'Eメール: ケース',
  'LBL_EMAILS_CONTACTS_REL' => 'Eメール: 契約',
  'LBL_EMAILS_LEADS_REL' => 'Eメール: リード',
  'LBL_EMAILS_MEETINGS_REL' => 'Eメール: 会議',
  'LBL_EMAILS_NOTES_REL' => 'Eメール: メモ',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => '主たるチームが指定されていません。',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'Eメール: 商談',
  'LBL_EMAILS_PROJECT_REL' => 'Eメール: プロジェクト',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'Eメール: プロジェクトタスク',
  'LBL_EMAILS_PROSPECT_REL' => 'Eメール: ターゲット',
  'LBL_EMAILS_QUOTES_REL' => 'Eメール: 見積',
  'LBL_EMAILS_TASKS_REL' => 'Eメール: タスク',
  'LBL_EMAILS_USERS_REL' => 'Eメール: ユーザ',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '「--なし--」を選択するとメールの本文に入力されている内容はすべて失われます。継続してよいですか？',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '取引先担当者の名前などを含むEメールテンプレートを用いて複数の受信者にメールを送信すると予期せぬ結果を招くことがあります。一括メールを送信する際はEメールキャンペーンを利用することをお勧めします。',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'このテンプレートを選択するとメールの本文に入力されている内容はすべて失われます。継続してよいですか？',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '確認',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '警告:',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'メールアカウントのプロパティ',
  'LBL_EMAIL_ATTACHMENT' => 'Eメール添付',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => '依頼されたお見積です（このテキストは変更できます）。',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'さらに表示',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => '表示',
  'LBL_EMAIL_EDITOR_OPTION' => 'HTMLメールを送信',
  'LBL_EMAIL_FLAGGED' => 'フラグ:',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>個人</b>: あなたがアクセス可能なメールアカウントです。このアカウントからはあなただけがメールの管理とインポートが可能です。<br><b>グループ</b>: 特定のチームのメンバーがアクセス可能なメールアカウントです。チームメンバーはメールの管理とインポートが可能です。<br><b>グループ - 自動インポート</b>: 特定のチームのメンバーがアクセス可能なメールアカウントです。Eメールは自動的にレコードとしてインポートされます。',
  'LBL_EMAIL_QUOTE_FOR' => '以下の見積:',
  'LBL_EMAIL_RELATE' => '関連先',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Reply To ステータス:',
  'LBL_EMAIL_SELECTOR_CLEAR' => 'クリア',
  'LBL_EMAIL_SELECTOR_SELECT' => '選択',
  'LBL_EMAIL_SETTINGS_INBOUND' => '受信メール',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'メールアカウント',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => '送信メール',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => '送信SMTPサーバ',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => '送信SMTPサーバ',
  'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>このメッセージには内容がありません</em></span></p>',
  'LBL_EMPTY_FOLDER' => 'Eメールがありません',
  'LBL_ENTER_FOLDER_NAME' => 'フォルダ名を入力してください。',
  'LBL_ERROR_SAVING_DRAFT' => 'ドラフトの保存時にエラー',
  'LBL_ERROR_SELECT_MODULE' => 'フィールドに関連付けるモジュールを選択してください。',
  'LBL_ERROR_SELECT_MODULE_SELECT' => '関連先の横に配置されている選択ボタンからモジュールを選択してください',
  'LBL_ERROR_SELECT_REPORT' => 'レポートを選択してください。',
  'LBL_ERROR_SENDING_EMAIL' => 'Eメール送信エラー',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchangeパスワード:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchangeサーバポート:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchangeサーバ:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchangeユーザ名:',
  'LBL_FILTER_BY_RELATED_BEAN' => '関係のある受信者のみ表示',
  'LBL_FORWARD_HEADER' => '転送されたメッセージ:',
  'LBL_FROM' => 'From:',
  'LBL_FROM_NAME' => 'From（名前）',
  'LBL_FW' => 'FW:',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Gmailパスワード:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail Eメールアドレス:',
  'LBL_HAS_ATTACHMENT' => '添付あり:',
  'LBL_HAS_ATTACHMENTS' => 'このEメールはすでに添付ファイルがあります。添付ファイルを保持しますか？',
  'LBL_HELP' => 'ヘルプ',
  'LBL_HTML_BODY' => 'HTMLボディ',
  'LBL_IMPORT_STATUS_TITLE' => 'ステータス',
  'LBL_INBOUND_TITLE' => 'インバウンドメール',
  'LBL_INTENT' => '目的',
  'LBL_INVITEE' => '受信者',
  'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
  'LBL_LESS_OPTIONS' => '追加項目を隠す',
  'LBL_LIST_ASSIGNED' => 'アサイン済み',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_LIST_BUG' => 'バグトラッカー',
  'LBL_LIST_CASE' => 'ケース',
  'LBL_LIST_CONTACT' => '取引先担当者',
  'LBL_LIST_CONTACT_NAME' => '取引先担当者',
  'LBL_LIST_CREATED' => '作成日',
  'LBL_LIST_DATE' => '送信日',
  'LBL_LIST_DATE_SENT' => '送信日',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'ドラフト',
  'LBL_LIST_FORM_SENT_TITLE' => '送信済み',
  'LBL_LIST_FORM_TITLE' => 'Eメール一覧',
  'LBL_LIST_FROM_ADDR' => 'From',
  'LBL_LIST_LEAD' => 'リード',
  'LBL_LIST_RELATED_TO' => '関連先',
  'LBL_LIST_STATUS' => 'ステータス',
  'LBL_LIST_SUBJECT' => '件名',
  'LBL_LIST_TASK' => 'タスク',
  'LBL_LIST_TIME' => '送信時間',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'グループ受信箱',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'メールアーカイブ',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'ドラフト',
  'LBL_LIST_TITLE_MY_INBOX' => '受信箱',
  'LBL_LIST_TITLE_MY_SENT' => '送信済み',
  'LBL_LIST_TO_ADDR' => 'To',
  'LBL_LIST_TYPE' => 'タイプ',
  'LBL_LOCK_FAIL_DESC' => '選択されたアイテムは利用不可能です。',
  'LBL_LOCK_FAIL_USER' => 'は所有権を持ちました。',
  'LBL_MAILBOX_TYPE_GROUP' => 'グループ',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'グループ - 自動インポート',
  'LBL_MAILBOX_TYPE_PERSONAL' => '個人',
  'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP認証を利用？',
  'LBL_MAIL_SMTPPASS' => 'SMTPパスワード:',
  'LBL_MAIL_SMTPPORT' => 'SMTPポート:',
  'LBL_MAIL_SMTPSERVER' => 'SMTPサーバ:',
  'LBL_MAIL_SMTPTYPE' => 'SMTPサーバタイプ:',
  'LBL_MAIL_SMTPUSER' => 'SMTPユーザ名:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTPサーバの仕様',
  'LBL_MASS_DELETE_ERROR' => 'チェックされたアイテムはどれも削除されませんでした。',
  'LBL_MEMBER_OF' => '上位',
  'LBL_MESSAGE_ID' => 'メッセージID',
  'LBL_MESSAGE_SENT' => 'Eメールを送信しました',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理者はまだ送信用のデフォルトのアカウントを設定していません。メールのテスト送信ができません。',
  'LBL_MODIFIED_BY' => '更新者',
  'LBL_MODULE_NAME' => 'Eメール',
  'LBL_MODULE_NAME_NEW' => 'メールアーカイブ',
  'LBL_MODULE_NAME_SINGULAR' => 'Eメール',
  'LBL_MODULE_NAME_SINGULAR_NEW' => 'メールアーカイブ',
  'LBL_MODULE_TITLE' => 'Eメール:',
  'LBL_MORE_OPTIONS' => '項目を追加',
  'LBL_MY_EMAILS' => '私のEメール',
  'LBL_NEW' => '新規',
  'LBL_NEW_FORM_TITLE' => 'メールアーカイブ',
  'LBL_NEXT_EMAIL' => '次のフリーアイテム',
  'LBL_NONE' => 'なし',
  'LBL_NOTES_SUBPANEL_TITLE' => '添付ファイル',
  'LBL_NOTE_SEMICOLON' => '注: 複数のEメールアドレスの区切る場合はセミコロンを使用してください。',
  'LBL_NOT_SENT' => '送信エラー',
  'LBL_NO_GRAB_DESC' => '利用可能なアイテムがありません。後で再試行してください。',
  'LBL_NO_SUBJECT' => '(件名なし)',
  'LBL_OF' => 'of',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商談',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'プロジェクト',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'プロジェクトタスク',
  'LBL_QS_DISABLED' => '（このモジュールでクイック検索は利用できません。選択ボタンを利用してください。）',
  'LBL_QUICK_CREATE' => 'クイック作成',
  'LBL_QUICK_REPLY' => '返信',
  'LBL_QUOTES_SUBPANEL_TITLE' => '見積',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => '見積のレイアウトファイルが存在しません: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => '見積のレイアウトがmodules/Quotes/Layouts.phpに登録されていません。',
  'LBL_RAW' => 'メールデータ',
  'LBL_RE' => 'RE:',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => '受信者が追加されました。',
  'LBL_REPLIED' => '返信済み',
  'LBL_REPLY_HEADER_1' => '以下の日-',
  'LBL_REPLY_HEADER_2' => 'さんは書きました:',
  'LBL_REPLY_TO' => 'Reply To:',
  'LBL_REPLY_TO_ADDRESS' => 'Reply-toアドレス',
  'LBL_REPLY_TO_NAME' => 'Reply-to名',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'ドラフト保存',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'ドラフト保存[Alt+R]',
  'LBL_SEARCH_FOR' => '検索',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'ドラフト検索',
  'LBL_SEARCH_FORM_SENT_TITLE' => '送信済みメール検索',
  'LBL_SEARCH_FORM_TITLE' => 'Eメール検索',
  'LBL_SELECTED_ADDR' => '選択済み',
  'LBL_SELECT_TEAM' => 'チーム選択',
  'LBL_SEND' => '送信',
  'LBL_SEND_ANYWAYS' => 'このメールには件名がありません。送信/保存しますか？',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_SEND_BUTTON_LABEL' => '送信',
  'LBL_SEND_BUTTON_TITLE' => '送信[Alt+S]',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'メッセージは送信できません',
  'LBL_SEND_IN_PLAIN_TEXT' => 'テキスト形式で送信',
  'LBL_SENT_MODULE_NAME' => '送信済み',
  'LBL_SENT_MODULE_NAME_SINGULAR' => '送信済みメール',
  'LBL_SHOW_ALT_TEXT' => '代替テキストの表示',
  'LBL_SIGNATURE' => 'シグニチャ',
  'LBL_SIGNATURE_PREPEND' => '返信時に上記シグネチャを利用',
  'LBL_SMTP_SERVER_HELP' => 'SMTPサーバはメールの送信に用います。サーバを利用するためにあユーザ名とパスワードを指定してください。',
  'LBL_STATUS' => 'Eメールステータス:',
  'LBL_SUBJECT' => '件名:',
  'LBL_TAKE_ONE_TITLE' => '担当',
  'LBL_TEST_EMAIL_BODY' => 'このEメールはSugarCRMで指定された送信サーバの設定をテストするために送信されました。このメールが正しく受信されたことは送信サーバの設定が正しいことを意味しています。',
  'LBL_TEST_EMAIL_SUBJECT' => 'Sugarからのメール送信テスト',
  'LBL_TEST_SETTINGS' => '設定のテスト',
  'LBL_TEXT_BODY' => 'テキストボディ',
  'LBL_TIME' => '送信時間:',
  'LBL_TITLE_SEARCH_RESULTS' => '検索結果',
  'LBL_TO' => 'To:',
  'LBL_TOGGLE_ALL' => 'すべて選択',
  'LBL_TO_ADDRS' => 'To',
  'LBL_TYPE' => 'タイプ:',
  'LBL_UNKNOWN' => '未知',
  'LBL_UNREAD' => '未読',
  'LBL_UNREAD_HOME' => '未読メール',
  'LBL_USE' => 'アサイン:',
  'LBL_USERS' => 'ユーザ',
  'LBL_USERS_SUBPANEL_TITLE' => 'ユーザ',
  'LBL_USER_SELECT' => 'ユーザ選択',
  'LBL_USE_ALL' => 'すべての検索結果',
  'LBL_USE_CHECKED' => 'チェックされたもののみ',
  'LBL_USE_MAILBOX_INFO' => '受信箱のアドレスを使用',
  'LBL_USE_TEMPLATE' => 'テンプレートの利用:',
  'LBL_USING_RULES' => '利用するルール:',
  'LBL_WAIT' => '待機',
  'LBL_WARN_NO_DIST' => '配布方法が選択されていません',
  'LBL_WARN_NO_USERS' => 'ユーザが選択されていません',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'アサイン先のユーザもしくはチームを選択してください。',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo!メールパスワード:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo!メールID:',
  'LBL_YAHOO_MAIL' => 'Yahoo',
  'LNK_ALL_EMAIL_LIST' => 'すべてのEメール',
  'LNK_ARCHIVED_EMAIL_LIST' => 'アーカイブ済みEメール',
  'LNK_CALL_LIST' => '電話',
  'LNK_CHECK_MY_INBOX' => '私のメールをチェック',
  'LNK_DATE_SENT' => '送信日',
  'LNK_DRAFTS_EMAIL_LIST' => 'すべてのドラフト',
  'LNK_EMAIL_LIST' => 'Eメール',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Eメールテンプレート一覧',
  'LNK_GROUP_INBOX' => 'グループ受信箱',
  'LNK_MEETING_LIST' => '会議',
  'LNK_MY_ARCHIVED_LIST' => 'メールアーカイブ',
  'LNK_MY_DRAFTS' => 'ドラフト',
  'LNK_MY_INBOX' => '私のメール',
  'LNK_NEW_ARCHIVE_EMAIL' => 'メールアーカイブ',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_EMAIL' => 'Eメール送信',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Eメールテンプレート作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_NOTE' => 'メモ作成',
  'LNK_NEW_SEND_EMAIL' => 'Eメール作成',
  'LNK_NEW_TASK' => 'タスク作成',
  'LNK_NOTE_LIST' => 'メモ',
  'LNK_QUICK_REPLY' => '返信',
  'LNK_SENT_EMAIL_LIST' => '送信済み',
  'LNK_TASK_LIST' => 'タスク',
  'LNK_VIEW_CALENDAR' => '今日',
  'LNK_VIEW_MY_INBOX' => '私のメールを閲覧',
  'NTC_REMOVE_INVITEE' => '本当にこの受信者をEメールからはずしてよいですか？',
  'WARNING_NO_UPLOAD_DIR' => 'ファイルの添付ができません: upload_tmp_dirが設定されていません。php.iniの設定を確認してください。',
  'WARNING_SETTINGS_NOT_CONF' => '警告: Eメールを送信するための設定がされていません。',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'ファイルの添付ができません: upload_tmp_dirの値が不正です。php.iniの設定を確認してください。',
);

