<?php
/*
 * Include file Controller
 */
require SYS.'/Controller.php';
/*
 * Include file Core
 */
require SYS.'/Core.php';
/*
 * Include file Model
 */
require SYS.'/Model.php';
/*
 * Include file Router
 */
require SYS.'/Router.php';
/*
 * Include file Views
 */
require SYS.'/Views.php';
/*
 * Include debug mode for test.
 */
require_once '/system/mode/debug.php';
/*
 * Set the default time zone.
 * @link http://www.php.net/manual/timezones
 */
date_default_timezone_set('Europe/Moscow');
/*
 * Set the default locale.
 * @link http://www.php.net/manual/function.setlocale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');

?>
