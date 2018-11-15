<?php
/* Smarty version 3.1.33, created on 2018-11-15 05:14:26
  from 'D:\wamp64\www\speedbuy\app\view\goods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed00b2e6cd69_46312572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3705c11bb4f2463f88d4c4757bfbf8e4fc0027e' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\goods.html',
      1 => 1542258760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed00b2e6cd69_46312572 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
goods.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<a href="/speedbuy/index.php/shop?sid=<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['sid'];?>
"class="position">
			<i class="iconfont icon-xiangzuo"></i>
			<span>返回</span>
		</a>
		<span><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['shopname'];?>
</span>
		<a href="javascript:void (false)" class="icon">
			<i class="iconfont icon-shoucang"></i>
			<i class="iconfont icon-fenxiang"></i>
		</a>
	</header>
	<!--food图片-->
	<div class="food-img">
		<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['thumb'];?>
" alt="">
	</div>
	<!--商品介绍-->
	<div class="shop-explain">
		<div class="name">
			<h1><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['title'];?>
</h1>
			<p>
				<span>月售<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['count'];?>
单</span>
				<span>好评<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['score']/5*100;?>
%</span>
			</p>
			<div>
				<div>&yen;<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['discount'];?>
</div>
				<del>&yen;<?php echo $_smarty_tpl->tpl_vars['res']->value[0]['price'];?>
</del>
			</div>
		</div>
		<div class="explain">
			<h2>商品描述</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['res']->value[0]['des'];?>
</p>
		</div>
		<div class="comment">
			<h2>顾客评价（823条）</h2>
		</div>
		<div class="none">
			<h2>暂无评价</h2>
		</div>
	</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html><?php }
}
