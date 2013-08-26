<?php

$appdir = 'application';
$datadir = 'data' ;
$sysdir = 'system' ;
define(APP, $appdir);
define(DATA, $datadir);
define(SYS, $sysdir);
/*
 * if (file_exists('../install.php'))
 * {
 * return include '../install.php' ;
 * }
 */

// Autoload the application
require APP.'/autoload.php';
?>
