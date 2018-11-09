<?php
/* Smarty version 3.1.33, created on 2018-11-09 11:45:17
  from 'D:\wamp64\www\speedbuy\app\view\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be5734d944756_93865619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd983991f9d2d4236db5840215b5a5dd737ccfc' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\login.html',
      1 => 1541763851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be5734d944756_93865619 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
login.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--LOGO-->
	<header>
		<img src="<?php echo IMG_PATH;?>
logo.png" alt="">
	</header>
	<!--注册视窗-->
	<form class="windows" id="myform">
		<div>
			<span></span>
			<input type="text" name="phone" id="phone" placeholder="请输入您的手机号"/>
		</div>
		<div class="code">
			<span></span>
			<input type="text" name="code" id="code" placeholder="请输入验证码"/>
		</div>
		<div class="codeimg">
			<img src="/speedbuy/index.php/my/code" alt="" onclick="this.src='/speedbuy/index.php/my/code?id='+Date.now()">
		</div>
		<div>
			<span></span>
			<input type="text" name="password" id="password" placeholder="请输入您设置的密码"/>
		</div>
		<button type="submit" class="login">登录</button>
		<div class="other">
			<a href="#">忘记密码？</a>
			<a href="/speedbuy/index.php/my/registeruser">没有账号？请注册</a>
		</div>
	</form>
	<!--第三方登录-->
	<div class="thirdparty">
		<p>请使用第三方登录</p>
		<p class="third">
			<a href="#"><i class="iconfont icon-qq"></i></a>
			<a href="#"><i class="iconfont icon-weixin"></i></a>
			<a href="#"><i class="iconfont icon-xinlang"></i></a>
		</p>
	</div>
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
jquery.validate.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
login.js" type="text/javascript"><?php echo '</script'; ?>
>
</html>
<?php }
}
