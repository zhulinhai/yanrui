<?php
// This is the default file for the site. Usually index.php
$default = 'index.php';

// The name of this file.
// Set this value for the URL in Custom Error Properties of your website in IIS.
// Goto: IIS Manager > Websites > [Site Name] > Properties > Custom Errors >
// 404 & 404;2 & 404;3 > URL (Requires a '/' prefix in IIS).
$thisfile = '404.php'; //404.php修改为你的404页面名称即可

$_SERVER['ORIG_PATH_TRANSLATED'] = str_replace($thisfile, $default, $_SERVER

['ORIG_PATH_TRANSLATED']);
$_SERVER['SCRIPT_FILENAME'] = str_replace($thisfile, $default, $_SERVER['SCRIPT_FILENAME']);
$_SERVER['ORIG_PATH_INFO'] = str_replace($thisfile, $default, $_SERVER['ORIG_PATH_INFO']);
$_SERVER['SCRIPT_NAME'] = str_replace($thisfile, $default, $_SERVER['SCRIPT_NAME']);
$_SERVER['PHP_SELF'] = str_replace($thisfile, $default, $_SERVER['PHP_SELF']);
$_SERVER['PATH_INFO'] = false;

$qs =& $_SERVER['QUERY_STRING'];
$ru =& $_SERVER['REQUEST_URI'];
$pos = strrpos($qs, '://');
$pos = strpos($qs, '/', $pos + 4);
$_SERVER['URL'] = $ru = substr($qs, $pos);
$qs = trim(stristr($ru, '?'), '?');

// Required for Wordpress 2.8+
$_SERVER['HTTP_X_ORIGINAL_URL'] = $ru;

// Fix GET vars
foreach ( $_GET as $var => $val ) {
    if ( substr($var, 0, 3) == '404') {
        if ( strstr($var, '?') ) {
            $newvar = substr($var, strpos($var, '?') + 1);
            $_GET[$newvar] = $val;
        }
        unset($_GET[$var]);
    }
    break;
}
include($default);
?>