<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tnjaile 製作
// 製作日期：2015-01-23
// $Id:$
// ------------------------------------------------------------------------- //

//$modversion = array();

$moduleDirName = basename(__DIR__);

// ------------------- Informations ------------------- //
$modversion = array(
    'name'                => _MI_JILLBOOKIN_NAME,
    'description'         => _MI_JILLBOOKIN_DESC,
    'official'            => 0, //1 indicates supported by XOOPS Dev Team, 0 means 3rd party supported
    'author'              => _MI_JILLBOOKIN_AUTHOR,
    'author_mail'         => 'tnjaile@gmail.com',
    'author_website_url'  => '',
    'author_website_name' => _MI_JILLBOOKIN_AUTHOR_WEB,
    'credits'             => _MI_JILLBOOKIN_CREDITS,
    'license'             => 'GPL 2.0 or later',
    'license_url'         => 'www.gnu.org/licenses/gpl-2.0.html/',
    'help'                => 'page=help',
    //
    'release_info'        => 'Changelog',
    'release_file'        => XOOPS_URL . "/modules/{$moduleDirName}/docs/changelog file",
    //
    'manual'              => 'link to manual file',
    'manual_file'         => XOOPS_URL . "/modules/{$moduleDirName}/docs/install.txt",
    'min_php'             => '5.5',
    'min_xoops'           => '2.5.7.2',
    'min_admin'           => '1.1',
    'min_db'              => array('mysql' => '5.0.7', 'mysqli' => '5.0.7'),
    // images
    'image'               => 'images/logo.png',
    'iconsmall'           => 'images/iconsmall.png',
    'iconbig'             => 'images/iconbig.png',
    'dirname'             => "{$moduleDirName}",
    //Frameworks
    'dirmoduleadmin'      => 'Frameworks/moduleclasses/moduleadmin',
    'sysicons16'          => 'Frameworks/moduleclasses/icons/16',
    'sysicons32'          => 'Frameworks/moduleclasses/icons/32',
    // Local path icons
    'modicons16'          => 'assets/images/icons/16',
    'modicons32'          => 'assets/images/icons/32',
    //About
    'version'             => 1.01,
    'module_status'       => 'Beta 1',
    'release_date'        => '2015-05-29', //yyyy/mm/dd
    //    'release'             => '2015-04-04',
    'demo_site_url'       => 'http://www.xoops.org',
    'demo_site_name'      => 'XOOPS Demo Site',
    'support_url'         => 'http://xoops.org/modules/newbb',
    'support_name'        => 'Support Forum',
    'module_website_url'  => '',
    'module_website_name' => _MI_JILLBOOKIN_AUTHOR_WEB,
    // Admin system menu
    'system_menu'         => 1,
    // Admin menu
    'hasAdmin'            => 1,
    'adminindex'          => 'admin/main.php',
    'adminmenu'           => 'admin/menu.php',
    // Main menu
    'hasMain'             => 1,
    $modversion['sub'] = array(
        array('name' => _MI_JILLBOOKIN_SMNAME2, 'url' => 'batch.php'),
        array('name' => _MI_JILLBOOKIN_SMNAME3, 'url' => 'list.php')
    ),
    //Search & Comments
    //    'hasSearch'           => 1,
    //    'search'              => array(
    //        'file'   => 'include/search.inc.php',
    //        'func'   => 'XXXX_search'),
    //    'hasComments'         => 1,
    //    'comments'              => array(
    //        'pageName'   => 'index.php',
    //        'itemName'   => 'id'),

    // Install/Update
    'onInstall'           => 'include/onInstall.php',
    'onUninstall'         => 'include/onUninstall.php',
    'onUpdate'            => 'include/onUpdate.php'

);

// ------------------- PayPal ------------------- //
$modversion['paypal'][] = array(
    'business'      => 'tnjaile@gmail.com',
    'item_name'     => 'Donation :' . _MI_JILLBOOKIN_AUTHOR,
    'amount'        => 0,
    'currency_code' => 'USD'
);


// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Tables created by sql file (without prefix!)
$modversion['tables'] = array(
    $moduleDirName,
    $moduleDirName . '_date',
    $moduleDirName . '_item',
    $moduleDirName . '_time',
    $moduleDirName . '_week'
);

// ------------------- Templates ------------------- //
$modversion['templates'] = array(
    array('file' => $moduleDirName . '_adm_main.html', 'description' => $moduleDirName . '_adm_main'),
    array('file' => $moduleDirName . '_adm_main_b3.html', 'description' => $moduleDirName . '_adm_main_b3 for Bootstrap3'),
    array('file' => $moduleDirName . '_adm_time.html', 'description' => $moduleDirName . '_adm_time'),
    array('file' => $moduleDirName . '_adm_time_b3.html', 'description' => $moduleDirName . '_adm_time_b3 for Bootstrap3'),
    array('file' => $moduleDirName . '_adm_time_b3.html', 'description' => $moduleDirName . '_adm_time_b3 for Bootstrap3'),
    array('file' => $moduleDirName . '_index.html', 'description' => $moduleDirName . '_index'),
    array('file' => $moduleDirName . '_index_b3.html', 'description' => $moduleDirName . '_index_b3 for Bootstrap3'),
    array('file' => $moduleDirName . '_batch.html', 'description' => $moduleDirName . '_batch'),
    array('file' => $moduleDirName . '_batch_b3.html', 'description' => $moduleDirName . '_batch_b3 for Bootstrap3'),
    array('file' => $moduleDirName . '_list.html', 'description' => $moduleDirName . '_list'),
    array('file' => $moduleDirName . '_list_b3.html', 'description' => $moduleDirName . '_list_b3 for Bootstrap3')
);

// ------------------- Config Options ------------------- //
$modversion['config'][] = array(
    'name'        => 'booking_group',
    'title'       => "_MI_JILLBOOKIN_BOOKING_GROUP",
    'description' => "_MI_JILLBOOKIN_BOOKING_GROUP_DESC",
    'formtype'    => 'group_multi',
    'valuetype'   => 'array',
    'default'     => '1'
);

$modversion['config'][] = array(
    'name'        => 'can_cancel',
    'title'       => "_MI_JILLBOOKIN_CAN_CANCEL",
    'description' => "_MI_JILLBOOKIN_CAN_CANCEL_DESC",
    'formtype'    => 'group_multi',
    'valuetype'   => 'array',
    'default'     => '1'
);
