<?php
// M  V  C
// M    -- model          -- 模型        -- 处理应用程序数据逻辑的部分，通常负责在数据库中存取数据。
// V    -- view             -- 视图        -- 处理数据显示的部分，通常是依据模型数据创建的。
// C    -- controller    -- 控制器     -- 处理用户交互的部分，通常负责从视图读取数据，控制用户输入，并向模型发送数据。

// 用常量代表文件路径
define('CSS_PATH','/speedbuy/static/css/');
define('JS_PATH','/speedbuy/static/js/');
define('LAYUIJS_PATH','/speedbuy/static/');
define('IMG_PATH','/speedbuy/static/images/');
// 必须引用一次Router模块验证跳转路径
require_once "libs/Router.php";
// 必须引用一次模板引擎
require_once "libs/libs/Smarty.class.php";
// 必须引用一次main，用来使用模板引擎上的方法
require_once "libs/main.php";
// 必须引用一次定义公共方法的模块
require_once "libs/db.php";
// 必须引用一次设定栏目标题的方法
require_once "libs/function.php";
// 默认使用Router的init方法
Router::init();