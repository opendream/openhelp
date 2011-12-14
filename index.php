<?php
$args = explode('/', $_SERVER['REQUEST_URI']);
$redirect = array_filter($args);

// change the following paths if necessary
$global=dirname(__FILE__).'/protected/global.php';
$yii=dirname(__FILE__).'/yii/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require($global);
require_once($yii);
Yii::createWebApplication($config)->run();

