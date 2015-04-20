<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tnjaile 製作
// 製作日期：2015-01-23
// $Id:$
// ------------------------------------------------------------------------- //
include_once XOOPS_ROOT_PATH . "/modules/tadtools/language/{$xoopsConfig['language']}/modinfo_common.php";

/*
define('_MI_JILLBOOKIN_NAME','場地預約');
define('_MI_JILLBOOKIN_AUTHOR','場地預約');
define('_MI_JILLBOOKIN_CREDITS','');
define('_MI_JILLBOOKIN_DESC','此模組的用途是提供場地預約的模組');
define('_MI_JILLBOOKIN_AUTHOR_WEB','');
define('_MI_JILLBOOKIN_ADMENU1', "場地管理");
define('_MI_JILLBOOKIN_ADMENU1_DESC', "場地管理");
define("_MI_JILLBOOKIN_SMNAME2", "批次預約");
define("_MI_JILLBOOKIN_SMNAME3", "預約清單");

//偏好設定
define('_MI_JILLBOOKIN_BOOKING_GROUP' , '可預約場地者');
define('_MI_JILLBOOKIN_BOOKING_GROUP_DESC' , '可預約場地之群組');
define('_MI_JILLBOOKIN_CAN_CANCEL' , '可取消他人預約場地者');
define('_MI_JILLBOOKIN_CAN_CANCEL_DESC' , '可取消他人預約場地之群組');

*/

define('_MI_JILLBOOKIN_NAME', 'Venue Management');
define('_MI_JILLBOOKIN_AUTHOR', 'Jillian');
define('_MI_JILLBOOKIN_CREDITS', '');
define('_MI_JILLBOOKIN_DESC', 'The purpose of this module is to provide a venue booking module');
define('_MI_JILLBOOKIN_AUTHOR_WEB', '');
define('_MI_JILLBOOKIN_ADMENU1', 'Venue Management');
define('_MI_JILLBOOKIN_ADMENU1_DESC', 'Venue Management');
define("_MI_JILLBOOKIN_SMNAME2", 'Batch reservation');
define("_MI_JILLBOOKIN_SMNAME3", 'Reservation list');
// Preferences
define('_MI_JILLBOOKIN_BOOKING_GROUP', 'Who can make a venue reservation?');
define('_MI_JILLBOOKIN_BOOKING_GROUP_DESC', 'These groups can make reservations');
define('_MI_JILLBOOKIN_CAN_CANCEL', 'Who can cancel reservation made by others');
define('_MI_JILLBOOKIN_CAN_CANCEL_DESC', 'These groups can cancel reservations made by others');

//1.1 (mamba)

// The name of this module
define('_MI_JILLBOOKIN_DIRNAME', basename(dirname(dirname(__DIR__))));
define('_MI_JILLBOOKIN_HELP_HEADER', __DIR__.'/help/helpheader.html');
define('_MI_JILLBOOKIN_BACK_2_ADMIN',"Back to Administration of ");

//help
define('_MI_JILLBOOKIN_HELP_OVERVIEW',"Overview");
