<?php
/* Smarty version 3.1.33, created on 2018-11-09 05:34:55
  from 'D:\wamp64\www\speedbuy\app\view\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be51c7fe0cad3_39684475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2e655d9f14a06cbde0c73b5d315c115064c2df' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\index.html',
      1 => 1541741694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be51c7fe0cad3_39684475 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li class="swiper-slide">
				<a href="#">
					<img src="<?php echo IMG_PATH;?>
bi1.jpg" alt="">
				</a>
			</li>
			<li class="swiper-slide">
				<a href="#">
					<img src="<?php echo IMG_PATH;?>
bi1.jpg" alt="">
				</a>
			</li>
			<li class="swiper-slide">
				<a href="#">
					<img src="<?php echo IMG_PATH;?>
bi1.jpg" alt="">
				</a>
			</li>
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
		<li class="hot">
			<a href="#">综合排序</a>
		</li>
		<li>
			<a href="#">好评优先</a>
		</li>
		<li>
			<a href="#">距离最近</a>
		</li>
		<li>
			<a href="#">
				筛&nbsp;选&nbsp;
				<i class="iconfont icon-shaixuan"></i>
			</a>
		</li>
	</ul>
	<!--推荐商家列表-->
	<div class="recommend-shop">
		<ul class="recommend-shop-ul">
			<li>
				<a href="shop.html">
					<div class="left-img li01"></div>
					<div class="right-text">
						<h3>朴式拌饭</h3>
						<p class="iconxx">
							<span>
								<i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
							</span>
						    <span>5</span>
						    <span class="yj">月售968单</span>
						    <span class="v">蜂鸟专送</span>
						</p>
						<p class="delivery">
							<div class="delivery-left">
								<span>起送&yen;30</span>
							    <span>派送费&yen;4</span>
							</div>
							<div class="delivery-right">
								<span>2.3km</span>
							    <span>28分钟</span>
							</div>
						</p>
						<p class="label">
							<span class="black">日韩料理</span>
							<span class="black">品质联盟</span>
							<span class="red">
								<i class="iconfont icon-koubei"></i>
								<span>口碑人气好店</span>
							</span>
						</p>
						<div class="youhui">
							<div>
								<span class="new">首</span>
								<span>新用户下单立减14元</span>
							</div>
							<div>
								<span class="subtract">减</span>
								<span>满35减15，满55减20</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="shop.html">
					<div class="left-img li02"></div>
					<div class="right-text">
						<h3>老成都川菜馆</h3>
						<p class="iconxx">
							<span>
								<i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing" style="color: rgba(0,0,0,0.5);"></i>
							</span>
						    <span>4</span>
						    <span class="yj">月售556单</span>
						    <span class="v">蜂鸟专送</span>
						</p>
						<p class="delivery">
							<div class="delivery-left">
								<span>起送&yen;20</span>
							    <span>派送费&yen;4</span>
							</div>
							<div class="delivery-right">
								<span>2km</span>
							    <span>25分钟</span>
							</div>
						</p>
						<p class="label">
							<span class="black">川湘菜</span>
							<span class="black">品质联盟</span>
							<span class="red">
								<i class="iconfont icon-koubei"></i>
								<span>口碑人气好店</span>
							</span>
						</p>
						<div class="youhui">
							<div>
								<span class="new">首</span>
								<span>新用户下单立减14元</span>
							</div>
							<div>
								<span class="subtract">减</span>
								<span>满10减2，满30减5，满99减15</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="shop.html">
					<div class="left-img li03"></div>
					<div class="right-text">
						<h3>馋幺鸡秘汁炒鸡</h3>
						<p class="iconxx">
							<span>
								<i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
							</span>
						    <span>5</span>
						    <span class="yj">月售89单</span>
						    <span class="v">蜂鸟专送</span>
						</p>
						<p class="delivery">
							<div class="delivery-left">
								<span>起送&yen;20</span>
							    <span>派送费&yen;5</span>
							</div>
							<div class="delivery-right">
								<span>2.66km</span>
							    <span>28分钟</span>
							</div>
						</p>
						<p class="label">
							<span class="black">简餐</span>
						</p>
						<div class="youhui">
							<div>
								<span class="new">首</span>
								<span>新用户下单立减14元</span>
							</div>
							<div>
								<span class="subtract">减</span>
								<span>满26减13，满46减20，满66减38</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="shop.html">
					<div class="left-img li04"></div>
					<div class="right-text">
						<h3>贝克汉堡（铜锣湾店）</h3>
						<p class="iconxx">
							<span>
								<i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
							</span>
						    <span>5</span>
						    <span class="yj">月售2528单</span>
						    <span class="v">蜂鸟专送</span>
						</p>
						<p class="delivery">
							<div class="delivery-left">
								<span>起送&yen;30</span>
							    <span>派送费&yen;6</span>
							</div>
							<div class="delivery-right">
								<span>2.64km</span>
							    <span>30分钟</span>
							</div>
						</p>
						<p class="label">
							<span class="black">汉堡</span>
							<span class="red">
								<i class="iconfont icon-koubei"></i>
								<span>口碑人气好店</span>
							</span>
						</p>
						<div class="youhui">
							<div>
								<span class="new">首</span>
								<span>新用户下单立减14元</span>
							</div>
							<div>
								<span class="subtract">减</span>
								<span>满20减16，满30减26</span>
							</div>
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="shop.html">
					<div class="left-img li05"></div>
					<div class="right-text">
						<h3>三红锅贴</h3>
						<p class="iconxx">
							<span>
								<i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
						        <i class="iconfont icon-pingjiaxingxing"></i>
							</span>
						    <span>5</span>
						    <span class="yj">月售262单</span>
						    <span class="v">蜂鸟专送</span>
						</p>
						<p class="delivery">
							<div class="delivery-left">
								<span>起送&yen;15</span>
							    <span>派送费&yen;5</span>
							</div>
							<div class="delivery-right">
								<span>2.96km</span>
							    <span>31分钟</span>
							</div>
						</p>
						<p class="label">
							<span class="black">生煎锅贴</span>
						</p>
						<div class="youhui">
							<div>
								<span class="new">首</span>
								<span>新用户下单立减14元</span>
							</div>
						</div>
					</div>
				</a>
			</li>
		</ul>
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
			<a href="find.html">
				<i class="iconfont icon-find"></i>
			    <p>发现</p>
			</a>
		</li>
		<li>
			<a href="dindan.html">
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
index.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html><?php }
}
