<?php
//  ------------------------------------------------------------------------ //
// 本模組由 tnjaile 製作
// 製作日期：2015-01-23
// $Id:$
// ------------------------------------------------------------------------- //


$icon_dir  = substr(XOOPS_VERSION, 6, 3) == '2.6' ? '' : 'images/admin/';


$adminmenu[] = array(
    'title' => _MI_TAD_ADMIN_HOME,
    'link'  => 'admin/index.php',
    'desc' => _MI_TAD_ADMIN_HOME_DESC,
    'icon'  => 'images/admin/home.png'
);

$adminmenu[] = array(
    'title' => _MI_JILLBOOKIN_ADMENU1,
    'link'  => 'admin/main.php',
    'desc' => _MI_JILLBOOKIN_ADMENU1_DESC,
    'icon'  => "{$icon_dir}check.png"
);

$adminmenu[] = array(
    'title' => _MI_TAD_ADMIN_ABOUT,
    'link'  => 'admin/about.php',
    'desc' => _MI_TAD_ADMIN_ABOUT_DESC,
    'icon'  => 'images/admin/about.png'
);
