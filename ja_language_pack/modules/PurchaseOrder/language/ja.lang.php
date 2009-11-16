<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>.
 ********************************************************************************/
/*********************************************************************************
 * $Header$
 * Description:  Defines the Japanese language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): H.Hokawa <hhokawa @nospam@ gmail.com>..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'購買発注',
'LBL_RELATED_PRODUCTS'=>'製品明細',
'LBL_MODULE_TITLE'=>'購買発注： ホーム',
'LBL_SEARCH_FORM_TITLE'=>'購買発注の検索',
'LBL_LIST_FORM_TITLE'=>'購買発注の一覧',
'LBL_NEW_FORM_TITLE'=>'新規購買発注',
'LBL_MEMBER_ORG_FORM_TITLE'=>'$$$Member Organizations',

'LBL_LIST_ACCOUNT_NAME'=>'顧客企業名',
'LBL_LIST_CITY'=>'市町村区',
'LBL_LIST_WEBSITE'=>'Web サイト',
'LBL_LIST_STATE'=>'都道府県',
'LBL_LIST_PHONE'=>'電話',
'LBL_LIST_EMAIL_ADDRESS'=>'電子メール アドレス',
'LBL_LIST_CONTACT_NAME'=>'顧客担当者名',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'顧客企業：',
'LBL_ACCOUNT_NAME'=>'顧客企業名：',
'LBL_PHONE'=>'電話：',
'LBL_WEBSITE'=>'Web サイト：',
'LBL_FAX'=>'FAX：',
'LBL_TICKER_SYMBOL'=>'証券コード：',
'LBL_OTHER_PHONE'=>'その他電話：',
'LBL_ANY_PHONE'=>'電話：',
'LBL_MEMBER_OF'=>'親会社：',
'LBL_EMAIL'=>'メール：',
'LBL_EMPLOYEES'=>'従業員数：',
'LBL_OTHER_EMAIL_ADDRESS'=>'その他電子メール：',
'LBL_ANY_EMAIL'=>'電子メール：',
'LBL_OWNERSHIP'=>'企業形態：',
'LBL_RATING'=>'格付け：',
'LBL_INDUSTRY'=>'業界：',
'LBL_SIC_CODE'=>'業種識別 (SIC) コード：',
'LBL_TYPE'=>'タイプ：',
'LBL_ANNUAL_REVENUE'=>'年間売上高：',
'LBL_ADDRESS_INFORMATION'=>'住所情報',
'LBL_Quote_INFORMATION'=>'企業情報',
'LBL_CUSTOM_INFORMATION'=>'カスタム情報',
'LBL_BILLING_ADDRESS'=>'請求先住所：',
'LBL_SHIPPING_ADDRESS'=>'発送先住所：',
'LBL_ANY_ADDRESS'=>'住所：',
'LBL_CITY'=>'市町村区：',
'LBL_STATE'=>'都道府県：',
'LBL_POSTAL_CODE'=>'郵便番号：',
'LBL_COUNTRY'=>'国：',
'LBL_DESCRIPTION_INFORMATION'=>'詳細情報',
'LBL_TERMS_INFORMATION'=>'諸条件',
'LBL_DESCRIPTION'=>'説明：',
'NTC_COPY_BILLING_ADDRESS'=>'コピー：請求先→発送先',
'NTC_COPY_SHIPPING_ADDRESS'=>'コピー：発送先→請求先',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'$$$Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'顧客企業が重複している可能性があります',
'MSG_DUPLICATE' => 'この vtiger_account を作成すると、重複した vtiger_account が作られる可能性 (vtiger_potentialy) があります。 以下リストから vtiger_account を選択するか、[新規顧客企業] をクリックして既に入力したデータで新しい vtiger_account の作成を続行することができます。',

'LBL_INVITEE'=>'顧客担当者',
'ERR_DELETE_RECORD'=>"vtiger_account を削除するには、レコード番号を指定する必要があります。",

'LBL_SELECT_ACCOUNT'=>'顧客企業の選択',
'LBL_GENERAL_INFORMATION'=>'一般情報',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'新規案件',
'LBL_POTENTIAL_TITLE'=>'案件',

'LBL_NEW_TASK'=>'新規作業',
'LBL_TASK_TITLE'=>'作業',
'LBL_NEW_CALL'=>'新規連絡',
'LBL_CALL_TITLE'=>'連絡',
'LBL_NEW_MEETING'=>'新規会議',
'LBL_MEETING_TITLE'=>'会議',
'LBL_NEW_EMAIL'=>'新規電子メール',
'LBL_EMAIL_TITLE'=>'電子メール',
'LBL_NEW_CONTACT'=>'新規顧客担当者',
'LBL_CONTACT_TITLE'=>'顧客担当者',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'すべて',
'LBL_PROSPECT'=>'潜在顧客',
'LBL_INVESTOR'=>'投資家',
'LBL_RESELLER'=>'代理店',
'LBL_PARTNER'=>'提携先',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'顧客企業ツール',
//Added for 4GA
'Subject'=>'表題',
'Quote Name'=>'見積り名',
'Vendor Name'=>'納入業者名',
'Requisition No'=>'申請番号',
'Tracking Number'=>'トラッキング番号',
'Contact Name'=>'顧客担当者名',
'Due Date'=>'締切日',
'Carrier'=>'配送業者',
'Type'=>'タイプ',
'Sales Tax'=>'売上税',
'Sales Commission'=>'営業手数料',
'Excise Duty'=>'消費税',
'Total'=>'合計',
'Product Name'=>'製品名',
'Assigned To'=>'担当',
'Billing Address'=>'番地 (請求先)',
'Shipping Address'=>'番地 (発送先)',
'Billing City'=>'市町村区 (請求先)',
'Billing State'=>'都道府県 (請求先)',
'Billing Code'=>'郵便番号 (請求先)',
'Billing Country'=>'国 (請求先)',
'Billing Po Box'=>'私書箱 (請求先)',
'Shipping Po Box'=>'私書箱 (発送先)',
'Shipping City'=>'市町村区 (発送先)',
'Shipping State'=>'都道府県 (発送先)',
'Shipping Code'=>'郵便番号 (発送先)',
'Shipping Country'=>'国 (発送先)',
'City'=>'市町村区',
'State'=>'都道府県',
'Code'=>'コード',
'Country'=>'国',
'Created Time'=>'作成日時',
'Modified Time'=>'更新日時',
'Description'=>'説明',
'Potential Name'=>'案件名',
'Customer No'=>'顧客番号',
'Purchase Order'=>'購買発注',
'Vendor Terms'=>'納入業者の諸条件',
'Pending'=>'保留事由',
'Account Name'=>'顧客企業名',
'Terms & Conditions'=>'諸条件',
//Quote Info
'LBL_PO_INFORMATION'=>'購買発注情報',
'LBL_PO'=>'購買発注',

 //Added for 4.2 GA
'LBL_SO_FORM_TITLE'=>'販売',
'LBL_PO_FORM_TITLE'=>'購買',
'LBL_SUBJECT_TITLE'=>'表題',
'LBL_VENDOR_NAME_TITLE'=>'納入業者名',
'LBL_TRACKING_NO_TITLE'=>'トラッキング番号：',
'LBL_PO_SEARCH_TITLE'=>'購買発注の検索',
'LBL_SO_SEARCH_TITLE'=>'販売受注の検索',
'LBL_QUOTE_NAME_TITLE'=>'見積り名',
'Order No'=>'注文番号',
'Status'=>'ステータス',
'PurchaseOrder'=>'購買発注',
'LBL_MY_TOP_PO'=>'私のトップのオープン購買発注',

//Added for existing Picklist Entries

'FedEx'=>'FedEx',
'UPS'=>'UPS',
'USPS'=>'USPS',
'DHL'=>'DHL',
'BlueDart'=>'BlueDart',

'Created'=>'作成済み',
'Approved'=>'承認済み',
'Delivered'=>'配送済み',
'Cancelled'=>'取り消し',
'Received Shipment'=>'配送物受領済み',

//Added for Reports (5.0.4)
'Tax Type'=>'税タイプ',
'Discount Percent'=>'割引率',
'Discount Amount'=>'割引額',
'Terms & Conditions'=>'諸条件',
'Adjustment'=>'調整',
'Sub Total'=>'小計',
'S&H Amount'=>'送料 & 取扱手数料',

//Added after 5.0.4 GA
'PurchaseOrder No'=>'購買発注 No',

);

?>
