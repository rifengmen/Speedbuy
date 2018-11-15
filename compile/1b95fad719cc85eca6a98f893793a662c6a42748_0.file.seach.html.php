<?php
/* Smarty version 3.1.33, created on 2018-11-15 09:40:13
  from 'D:\wamp64\www\speedbuy\app\view\seach.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed3efdbb50e3_83666113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b95fad719cc85eca6a98f893793a662c6a42748' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\seach.html',
      1 => 1542274812,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed3efdbb50e3_83666113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
seach.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<a href="/speedbuy/index.php"class="position">
			<i class="iconfont icon-xiangzuo"></i>
			<span>返回</span>
		</a>
		<span>搜索结果</span>
		<span style="width: 1rem"></span>
	</header>
	<!--搜索结果列表窗口-->
	<div class="history" id="wrapper">
		<ul class="history-list">

		</ul>
	</div>
	
	<!--tab栏-->
	<ul class="tab">
		<li class="hot">
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
		<li>
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
seach.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
