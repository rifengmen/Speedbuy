<?php
/* Smarty version 3.1.33, created on 2018-11-15 05:57:13
  from 'D:\wamp64\www\speedbuy\app\view\order.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed0ab9790239_35593422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6138fbb48a78339396192306ae6c3898a933f39a' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\order.html',
      1 => 1542261432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed0ab9790239_35593422 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
order.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<span>订单</span>
	</header>
	<!--历史订单列表窗口-->
	<div class="history" id="wrapper">
		<!--历史订单列表-->
        <div>
            <div class="scrollup">
                <span>不要拖了，上面没有的！</span>
            </div>
            <ul class="history-list">

            </ul>
            <div class="scrolldown">
                <i class="iconfont icon-jiazai"></i>
                <span>加载中...</span>
            </div>
        </div>
	</div>
	
	<!--tab栏-->
	<ul class="tab">
		<li>
			<a href="/speedbuy/index.php/index">
				<i class="iconfont icon-shouye"></i>
			    <p>首页</p>
			</a>
		</li>
		<li>
			<a>
				<i class="iconfont icon-find"></i>
			    <p>发现</p>
			</a>
		</li>
		<li class="hot">
			<a href="#">
				<i class="iconfont icon-single"></i>
			    <p>订单</p>
			</a>
		</li>
		<li>
			<a href="/speedbuy/index.php/my/querymy">
				<i class="iconfont icon-icon7"></i>
			    <p>我的</p>
			</a>
		</li>
	</ul>
	
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
order.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
