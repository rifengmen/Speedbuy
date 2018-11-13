<?php
/* Smarty version 3.1.33, created on 2018-11-13 03:25:50
  from 'D:\wamp64\www\speedbuy\app\view\shop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea443e3cf819_47824001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2fbdf0e9a3d6515873e699a8e0b49637601dab' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\shop.html',
      1 => 1542079549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea443e3cf819_47824001 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
shop.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
<!--头部-->
	<header>
        <a href="/speedbuy/index.php/cate?cid=1"class="position">
			<i class="iconfont icon-xiangzuo"></i>
		 <span>返回</span>
		</a>
		<span><?php echo $_smarty_tpl->tpl_vars['shop']->value['shopname'];?>
</span>
		<a href="javascript:void (false)" class="sousuo">
			<i class="iconfont icon-sousuo"></i>
		</a>
	</header>
	<!--店铺封面-->
	<div class="wrapper">
		<div class="zhanwei">
			<img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sthumb'];?>
" alt="">
		</div>
		<div class="logo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['shop']->value['sthumb'];?>
" alt="">
		</div>
		<div class="up">
			<h2><?php echo $_smarty_tpl->tpl_vars['shop']->value['shopname'];?>
</h2>
			<p>
				<span>评价&nbsp;<?php echo $_smarty_tpl->tpl_vars['shop']->value['score'];?>
</span>
				<span>月售&nbsp;<?php echo $_smarty_tpl->tpl_vars['shop']->value['sale'];?>
&nbsp;单</span>
				<span>派送费&nbsp;&yen;<?php echo $_smarty_tpl->tpl_vars['shop']->value['fee'];?>
</span>
			</p>
			<p>
				<span>满减</span>
				<span>满35减15，满50减15</span>
			</p>
			<p class="notice"><?php echo $_smarty_tpl->tpl_vars['shop']->value['notice'];?>
</p>
		</div>
	</div>
	<!--商家分类选项-->
	<ul class="recommend-fl">
		<li class="hot">
			<a href="#">点餐</a>
		</li>
		<!--<li>-->
			<!--<a href="#">评价</a>-->
		<!--</li>-->
		<li>
			<a href="#">商家</a>
		</li>
	</ul>
	<!--商品窗口-->
	<div class="shop-view">
		<!--商品列表-->
		<div class="recommend-shop">
			<div id="leftscroll">
				<ul class="list">

				</ul>
			</div>
			<div id="rightscroll">
				<ul class="recommend-shop-ul">

				</ul>
			</div>
		</div>
		<!--商家信息-->
		<div class="shop-msg">
			<div class="view">
				<h3>商家实景</h3>
				<ul>
					<li>
						<img src="/speedbuy/static/images/li01.png" alt="">
					</li>
					<li>
						<img src="/speedbuy/static/images/li02.png" alt="">
					</li>
				</ul>
			</div>
			<div class="message">
				<h3>商家信息</h3>
				<p>因爱而生，专注做粥，只为给你更好的，我们一直在用心！</p>
			</div>
			<ul>
				<li>
					<span>品类</span>
					<span>包子粥店，简餐</span>
				</li>
				<li>
					<span>商家电话</span>
					<span>13888886666</span>
				</li>
			</ul>
		</div>
	</div>
	<!--购物车商品信息-->
	<div class="shopping">
		<!--优惠提示-->
		<p class="discount">新用户下单立减14元</p>
		<div class="header">
			<span>已选商品</span>
			<i class="iconfont icon-shanchu">清空</i>
		</div>
		<div class="iscroll" id="shopscroll">
			<ul>

			</ul>
		</div>
	</div>
	<!--结算栏-->
	<div class="pay">
		<!--购物车-->
		<div class="cart">
			<i class="iconfont icon-gouwuchekong"></i>
			<span></span>
		</div>
		<!--支付栏-->
		<div class="left">
			<p>
				<span class="discount">未选购商品</span>
				<del class="price"></del>
			</p>
			<span>另需配送费11元</span>
		</div>
		<div class="right">
			<span>20元起配送</span>
		</div>
		</div>
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
shop.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
