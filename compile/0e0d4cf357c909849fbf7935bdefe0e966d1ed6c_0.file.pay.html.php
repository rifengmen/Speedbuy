<?php
/* Smarty version 3.1.33, created on 2018-11-14 14:26:45
  from 'D:\wamp64\www\speedbuy\app\view\pay.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bec30a5b67a91_77991837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e0d4cf357c909849fbf7935bdefe0e966d1ed6c' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\pay.html',
      1 => 1542200231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec30a5b67a91_77991837 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
pay.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>

	<div class="background">
		<img src="<?php echo IMG_PATH;?>
PAY.PNG" alt="">
	</div>
	<div class="discount">&yen;<?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</div>
	<div class="text">
		<a href="/speedbuy/index.php/index" class="index">返回首页</a>
		<a href="/speedbuy/index.php/order" class="order">查看订单</a>
	</div>
	
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
