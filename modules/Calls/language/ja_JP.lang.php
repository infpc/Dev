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
  'ERR_DELETE_RECORD' => '取引先を削除するにはレコード番号を指定する必要があります。',
  'LBL_ACCEPT_LINK' => '承認リンク',
  'LBL_ACCEPT_STATUS' => '出欠確認',
  'LBL_ACCOUNT_NAME' => '取引先',
  'LBL_ACTIVITIES_REPORTS' => '活動レポート',
  'LBL_ADD_BUTTON' => '追加',
  'LBL_ADD_INVITEE' => '参加者追加',
  'LBL_ASSIGNED_TO_ID' => 'アサイン先',
  'LBL_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_BLANK' => '-なし-',
  'LBL_CALL' => '電話:',
  'LBL_CALL_INFORMATION' => '電話の概要',
  'LBL_CANCEL_CREATE_INVITEE' => 'キャンセル',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => '本当にこの定期的なレコードをすべてはずしてよいですか？',
  'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
  'LBL_CONTACT_NAME' => '取引先担当者:',
  'LBL_CREATE_AND_ADD' => '作成＆追加',
  'LBL_CREATE_CONTACT' => '取引先担当者として',
  'LBL_CREATE_INVITEE' => '参加者作成',
  'LBL_CREATE_LEAD' => 'リードとして',
  'LBL_CREATE_MODULE' => '電話を記録',
  'LBL_DATE' => '開始日:',
  'LBL_DATE_END' => '終了日',
  'LBL_DATE_END_ERROR' => '最終日が開始日より前です',
  'LBL_DATE_TIME' => '開始日時:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => '電話',
  'LBL_DEL' => '削除',
  'LBL_DESCRIPTION' => '詳細:',
  'LBL_DESCRIPTION_INFORMATION' => '詳細情報',
  'LBL_DIRECTION' => '方向:',
  'LBL_DURATION' => '時間:',
  'LBL_DURATION_HOURS' => '時間:',
  'LBL_DURATION_MINUTES' => '分:',
  'LBL_EDIT_ALL_RECURRENCES' => '定期的な予定をすべて編集',
  'LBL_EMAIL' => 'Eメール',
  'LBL_EMAIL_REMINDER' => 'Eメールリマインダ',
  'LBL_EMAIL_REMINDER_SENT' => 'Eメールリマインダ送信済み',
  'LBL_EMAIL_REMINDER_TIME' => 'Eメールリマインダ時間',
  'LBL_EMPTY_SEARCH_RESULT' => '見つかりませんでした。以下より参加者を作成してください。',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'アサイン先ID',
  'LBL_EXPORT_CREATED_BY' => '作成者ID',
  'LBL_EXPORT_DATE_START' => '開始日時',
  'LBL_EXPORT_MODIFIED_USER_ID' => '更新者ID',
  'LBL_EXPORT_PARENT_TYPE' => 'モジュールに関連',
  'LBL_EXPORT_REMINDER_TIME' => 'リマインド時（分）',
  'LBL_FIRST_NAME' => '名',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'メモ',
  'LBL_HOURS_ABBREV' => '時間',
  'LBL_HOURS_MINUTES' => '(時/分)',
  'LBL_INVITEE' => '参加者',
  'LBL_LAST_NAME' => '姓',
  'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'アサイン先',
  'LBL_LIST_CLOSE' => '完了',
  'LBL_LIST_CONTACT' => '取引先担当者',
  'LBL_LIST_DATE' => '実施日',
  'LBL_LIST_DIRECTION' => '方向',
  'LBL_LIST_DURATION' => '時間',
  'LBL_LIST_FORM_TITLE' => '電話一覧',
  'LBL_LIST_MY_CALLS' => '私の電話',
  'LBL_LIST_RELATED_TO' => '関連先',
  'LBL_LIST_RELATED_TO_ID' => '関連先ID',
  'LBL_LIST_SUBJECT' => '件名',
  'LBL_LIST_TIME' => '開始時間',
  'LBL_LOG_CALL' => '電話作成',
  'LBL_MEMBER_OF' => '以下のメンバー:',
  'LBL_MINSS_ABBREV' => '分',
  'LBL_MODULE_NAME' => '電話',
  'LBL_MODULE_NAME_SINGULAR' => '電話',
  'LBL_MODULE_TITLE' => '電話: ホーム',
  'LBL_NAME' => '名前',
  'LBL_NEW_FORM_TITLE' => 'アポイント作成',
  'LBL_NO_ACCESS' => '$moduleを作成する権限がありません。',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => '親ID',
  'LBL_PHONE' => '電話',
  'LBL_RECURRENCE' => '定期的な予定',
  'LBL_RECURRING_LIMIT_ERROR' => '重複できる上限 $limit を超えたため、この電話をスケジュールすることはできません。',
  'LBL_RECURRING_SOURCE' => '循環ソース',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => '{{{this}}}と訪問',
  'LBL_RELATED_TO' => '関係先:',
  'LBL_REMINDER' => 'リマインダ:',
  'LBL_REMINDER_EMAIL' => 'Eメール',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'すべての招待者にメール',
  'LBL_REMINDER_POPUP' => 'ポップアップ',
  'LBL_REMINDER_TIME' => 'リマインダ時間',
  'LBL_REMOVE' => 'はずす',
  'LBL_REMOVE_ALL_RECURRENCES' => '定期的な予定をすべて削除',
  'LBL_REPEAT_COUNT' => 'リピート数',
  'LBL_REPEAT_DOW' => '繰り返し日',
  'LBL_REPEAT_END' => 'リピート終了',
  'LBL_REPEAT_END_AFTER' => '以下の回数まで:',
  'LBL_REPEAT_END_BY' => '以下の日まで:',
  'LBL_REPEAT_INTERVAL' => 'リピート間隔',
  'LBL_REPEAT_OCCURRENCES' => '回',
  'LBL_REPEAT_PARENT_ID' => '関連親ID',
  'LBL_REPEAT_TYPE' => 'リピートタイプ',
  'LBL_REPEAT_UNTIL' => '以下まで繰り返し',
  'LBL_SCHEDULING_FORM_TITLE' => 'スケジューリング',
  'LBL_SEARCH_BUTTON' => '検索',
  'LBL_SEARCH_FORM_TITLE' => '電話検索',
  'LBL_SELECT_FROM_DROPDOWN' => '関連先ドロップダウンリストから選択してください。',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => '保存＆招待送信',
  'LBL_SEND_BUTTON_TITLE' => '保存＆招待送信 [Alt+I]',
  'LBL_SEND_INVITES' => '招待送信',
  'LBL_STATUS' => 'ステータス:',
  'LBL_SUBJECT' => '件名:',
  'LBL_SYNCED_RECURRING_MSG' => 'この電話は他のシステムからSugarに同期されています。Sugarでこの電話を編集した場合は他のシステムへ同期できません。',
  'LBL_TIME' => '開始時間:',
  'LBL_TIME_END' => '終了時間',
  'LBL_USERS_SUBPANEL_TITLE' => 'ユーザ',
  'LNK_CALL_LIST' => '電話一覧',
  'LNK_IMPORT_CALLS' => '電話のインポ－ト',
  'LNK_NEW_ACCOUNT' => '取引先作成',
  'LNK_NEW_APPOINTMENT' => 'アポイント作成',
  'LNK_NEW_CALL' => '電話作成',
  'LNK_NEW_MEETING' => '会議作成',
  'LNK_NEW_OPPORTUNITY' => '商談作成',
  'LNK_SELECT_ACCOUNT' => '取引先選択',
  'NOTICE_DURATION_TIME' => '時間は0以上である必要があります。',
  'NTC_REMOVE_INVITEE' => '本当にこの参加者を電話からはずしてよいですか？',
);

