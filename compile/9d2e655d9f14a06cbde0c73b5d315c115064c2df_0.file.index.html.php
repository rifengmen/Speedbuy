<?php
/* Smarty version 3.1.33, created on 2018-11-15 06:39:33
  from 'D:\wamp64\www\speedbuy\app\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bed14a59e9588_24254064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2e655d9f14a06cbde0c73b5d315c115064c2df' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\index.html',
      1 => 1542263967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bed14a59e9588_24254064 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
swiper-4.4.1.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
index.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<div class="position">
			<i class="iconfont icon-location"></i>
			<span>山西省大同市</span>
		</div>
			<a href="#" class="sousuo">
				<i class="iconfont icon-sousuo"></i>
				<span>请输入您要搜索的美食</span>
			</a>
	</header>
	<!--banner图-->
	<div class="banner swiper-container">
		<ul class="banner-img swiper-wrapper">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li class="swiper-slide">
				<a href="/speedbuy/index.php/shop?sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['sthumb'];?>
" alt="">
				</a>
			</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		<div class="banner-dian swiper-pagination"></div>
	</div>
	<!--美食分类选项-->
	<div class="foodentry-wrapper swiper-container">
		<div class="swiper-wrapper">
			<?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['num']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['num']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
			<ul class="swiper-slide">
				<?php $_smarty_tpl->_assignInScope('list', $_smarty_tpl->tpl_vars['i']->value*8+7);?>
				<?php if ($_smarty_tpl->tpl_vars['list']->value > count($_smarty_tpl->tpl_vars['res']->value)-1) {?>
				<?php $_smarty_tpl->_assignInScope('list', count($_smarty_tpl->tpl_vars['res']->value)-1);?>
				<?php }?>
				<?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['list']->value+1 - ($_smarty_tpl->tpl_vars['i']->value*8) : $_smarty_tpl->tpl_vars['i']->value*8-($_smarty_tpl->tpl_vars['list']->value)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value*8, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
				<li>
					<a href="/speedbuy/index.php/cate?cid=<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['j']->value]['cid'];?>
" class="foodentry1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['j']->value]['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
">
					</a>
					<p><?php echo $_smarty_tpl->tpl_vars['res']->value[$_smarty_tpl->tpl_vars['j']->value]['title'];?>
</p>
				</li>
				<?php }
}
?>
			</ul>
			<?php }
}
?>
		</div>
	</div>
	<!--推荐商家标题栏-->
	<div class="recommend">
		<div class="zw">
			<div class="zw-left"></div>
			<div class="zw-text">商家推荐</div>
			<div class="zw-right"></div>
		</div>
		<div class="yw">RECOMMEND FOOD</div>
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
            <ul class="recommend-shop-ul">

            </ul>
            <div class="scrolldown">
                <i class="iconfont icon-jiazai"></i>
                <span>加载中...</span>
            </div>
        </div>
	</div>
	<!--tab栏-->
	<ul class="tab">
		<li class="hot">
			<a href="javascript:void (false)">
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
			<a href="/speedbuy/index.php/order">
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
swiper-4.4.1.min.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll-probe.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html><?php }
}
