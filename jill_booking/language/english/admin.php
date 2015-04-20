<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tnjaile 製作
// 製作日期：2015-01-23
// $Id:$
// ------------------------------------------------------------------------- //

include_once "../../tadtools/language/{$xoopsConfig['language']}/admin_common.php";
//define("_TAD_NEED_TADTOOLS"," 需要 tadtools 模組，可至<a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'>Tad教材網</a>下載。");

define("_ TAD_NEED TAD TOOLS", "need tad tools modules, up to <a href='http://www.tad0616.net/modules/tad_uploader/index.php?of_cat_sn=50' target='_blank'> Tad textbook net </a> download ");

/*
//main
define("_MA_JILLBOOKIN_ADD","新增場地");
define("_MA_JILLBOOKIN_ADD_TIME","新增時段");
define("_MA_JILLBOOKIN_JBT_SN","時段編號");
define("_MA_JILLBOOKIN_JBI_SN","場地編號");
define("_MA_JILLBOOKIN_JBT_TITLE","時段標題");
define("_MA_JILLBOOKIN_JBT_SORT","時段排序");
define("_MA_JILLBOOKIN_JBT_WEEK","開放預約日");
define("_MA_JILLBOOKIN_JBI_TITLE","場地名稱");
define("_MA_JILLBOOKIN_JBI_DESC","場地說明");
define("_MA_JILLBOOKIN_JBI_SORT","場地排序");
define("_MA_JILLBOOKIN_JBI_ENABLE","是否可借");
define("_MA_JILLBOOKIN_JBI_APPROVAL","是否需審核");
define("_MA_JILLBOOKIN_BACK","回場地管理");
define("_MA_JILLBOOKIN_SETTIME","時段設定");
define("_MA_JILLBOOKIN_COPY","複製");
define("_MA_JILLBOOKIN_COPY_DESC1","或批次複製:");
define("_MA_JILLBOOKIN_COPY_DESC2","的時段");
define("_MA_JILLBOOKIN_W0","星期日");
define("_MA_JILLBOOKIN_W1","星期一");
define("_MA_JILLBOOKIN_W2","星期二");
define("_MA_JILLBOOKIN_W3","星期三");
define("_MA_JILLBOOKIN_W4","星期四");
define("_MA_JILLBOOKIN_W5","星期五");
define("_MA_JILLBOOKIN_W6","星期六");
define("_MA_JILLBOOKIN_JBI_START","啟用日期");
define("_MA_JILLBOOKIN_JBI_END","停用日期");
define("_MA_JILLBOOKIN_JBI_PERIOD","起訖期間");
define("_MA_JILLBOOKIN_IMPORT","從範本快速匯入時段設定");
define("_MA_JILLBOOKIN_IMPORT_18","快速匯入「1至8節」的時段設定");
define("_MA_JILLBOOKIN_IMPORT_APM","快速匯入「上下午」的時段設定");
define("_MA_JILLBOOKIN_IMPORT_PLACE","快速匯入「%s」的時段設定（共 %s 個時段）");
define("_MA_JILLBOOKIN_N_TIME","第 %s 節");
define("_MA_JILLBOOKIN_BOOKING_TIME","已被預約 %s 次，無法刪除");
define("_MA_JILLBOOKIN_AM","上午");
define("_MA_JILLBOOKIN_PM","下午");
*/


define("_MA_JILLBOOKIN_ADD", "New Venue");
define("_MA_JILLBOOKIN_ADD_TIME", "Submit Room");
define("_MA_JILLBOOKIN_JBT_SN", "Room number");
define("_MA_JILLBOOKIN_JBI_SN", "Venue Number");
define("_MA_JILLBOOKIN_JBT_TITLE", "Room Name");
define("_MA_JILLBOOKIN_JBT_SORT", "Sorting");
define("_MA_JILLBOOKIN_JBT_WEEK", "Available for Booking on these days");
define("_MA_JILLBOOKIN_JBI_TITLE", "Venue Name");
define("_MA_JILLBOOKIN_JBI_DESC", "Venue Description");
define("_MA_JILLBOOKIN_JBI_SORT", "Venue sorting");
define("_MA_JILLBOOKIN_JBI_ENABLE", "Enabled");
define("_MA_JILLBOOKIN_JBI_APPROVAL", "Approved");
define("_MA_JILLBOOKIN_BACK", "Back to the venue management");
define("_MA_JILLBOOKIN_SETTIME", "Scheduling");
define("_MA_JILLBOOKIN_COPY", "Copy");
define("_MA_JILLBOOKIN_COPY_DESC1", "Or batch copy:");
define("_MA_JILLBOOKIN_COPY_DESC2", "Period");
define("_MA_JILLBOOKIN_W0", "Sunday");
define("_MA_JILLBOOKIN_W1", "Monday");
define("_MA_JILLBOOKIN_W2", "Tuesday");
define("_MA_JILLBOOKIN_W3", "Wednesday");
define("_MA_JILLBOOKIN_W4", "Thursday");
define("_MA_JILLBOOKIN_W5", "Friday");
define("_MA_JILLBOOKIN_W6", "Saturday");
define("_MA_JILLBOOKIN_JBI_START", "Start date");
define("_MA_JILLBOOKIN_JBI_END", "End date");
define("_MA_JILLBOOKIN_JBI_PERIOD", "Beginning and ending period");
define("_MA_JILLBOOKIN_IMPORT", "Fast import from the model set period");
define("_MA_JILLBOOKIN_IMPORT_18", "Fast import 1-8 set period");
define("_MA_JILLBOOKIN_IMPORT_APM", "Fast import PM period");
define("_MA_JILLBOOKIN_IMPORT_PLACE", "Fast import %s set time period (the period of \"%s\")");
define("_MA_JILLBOOKIN_N_TIME", "\"%s\" per Day");
define("_MA_JILLBOOKIN_BOOKING_TIME", "It has \"%s\" reservations, can not be deleted.");
define("_MA_JILLBOOKIN_AM", "AM");
define("_MA_JILLBOOKIN_PM", "PM");
