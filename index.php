<?php
// M  V  C
// localhost/speedbuy/index.php/adminlogin/login  登录
// localhost/speedbuy/index.php/adminlogin/register  注册
define('CSS_PATH','/speedbuy/static/css/');
define('JS_PATH','/speedbuy/static/js/');
define('LAYUIJS_PATH','/speedbuy/static/');
define('IMG_PATH','/speedbuy/static/images/');
require_once "libs/Router.php";
require_once "libs/libs/Smarty.class.php";
require_once "libs/main.php";
require_once "libs/db.php";
require_once "libs/function.php";
Router::init();