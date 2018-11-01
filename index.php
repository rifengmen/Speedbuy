<?php
// M  V  C
// M     -- model            -- 模型             -- 应用程序中用于处理应用程序数据逻辑的部分，通常负责在数据库中存取数据。
// V     -- view               -- 视图             -- 应用程序中处理数据显示的部分，通常是依据模型数据创建的。
// C     -- controller      -- 控制器          -- 
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