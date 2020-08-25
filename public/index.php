<?php

/* 定义这个常量是为了在application.ini中引用*/
//define('APP_PATH', dirname(__FILE__));
define("APP_PATH", realpath(dirname(__FILE__) . '/../')); /* 指向public的上一级 */

$application = new Yaf_Application(APP_PATH . "/conf/application.ini");

$application->bootstrap()->run();
