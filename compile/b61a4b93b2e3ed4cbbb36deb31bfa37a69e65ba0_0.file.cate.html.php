<?php
/* Smarty version 3.1.33, created on 2018-11-08 14:13:06
  from 'D:\wamp64\www\speedbuy\app\view\cate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be4447292c9c6_21889884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61a4b93b2e3ed4cbbb36deb31bfa37a69e65ba0' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\cate.html',
      1 => 1541686337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be4447292c9c6_21889884 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
cate.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<a href="/speedbuy/index.php/index" class="position">
			<i class="iconfont icon-xiangzuo"></i>
			<span>返回</span>
		</a>
		<span><?php echo $_smarty_tpl->tpl_vars['cres']->value[0]['title'];?>
</span>
		<a href="#" class="sousuo">
			<i class="iconfont icon-sousuo"></i>
		</a>
	</header>
	<!--nav部分-->
	<div class="nav">
		    <ul>
		    	<li class="hot" cid="0">全部</li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sres']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		    	<li cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</li>
		    	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		    </ul>
	</div>
	<!--推荐商家分类选项-->
	<ul class="recommend-fl">
		<li class="hot" type="sid">综合排序</li>
		<li type="score">好评优先</li>
		<li type="sale">销量优先</li>
		<li type="fee">派送费</li>
	</ul>
	<!--推荐商家列表-->
	<div class="recommend-shop" id="wrapper">
		<div>
			<div class="scrollup">
				<span>不要拖了，上面没有的！</span>
			</div>
			<ul class="recommend-shop-ul">

			</ul>
			<div class="scrolldown">
				<i class="iconfont icon-jiazai"></i>
				<span>加载中...</span>
			</div>
		</div>
	</div>
	<div class="loadBox">
		<div class="loadimg"></div>
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
iscroll-probe.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
cate.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
