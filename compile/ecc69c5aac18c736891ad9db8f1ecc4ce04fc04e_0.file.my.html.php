<?php
/* Smarty version 3.1.33, created on 2018-11-09 05:34:59
  from 'D:\wamp64\www\speedbuy\app\view\my.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be51c83a584e3_41974751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc69c5aac18c736891ad9db8f1ecc4ce04fc04e' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\my.html',
      1 => 1541741622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be51c83a584e3_41974751 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
my.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<!--头部-->
	<header>
		<i class="iconfont icon-msg-system"></i>
		<span>我的</span>
		<i class="iconfont icon-shezhi"></i>
	</header>
	<!--背景蓝-->
	<div class="blue">
	<!--个人资料-->
	<div class="name">
		<div class="left">
			<div>
				<img src="<?php echo IMG_PATH;?>
my.png" alt="">
			</div>
		</div>
		<div class="right">
			<h1>
				<span>昵称：</span>
				<span>忧郁xiao流氓</span>
			</h1>
			<div class="icon">
				<div>
					<span>
					<i class="iconfont icon-pingjiaxingxing"></i>
				    <i class="iconfont icon-pingjiaxingxing"></i>
					<i class="iconfont icon-pingjiaxingxing"></i>
				    <i class="iconfont icon-pingjiaxingxing"></i>
			    	</span>
				    <span>VIP</span>
				</div>
				<i class="iconfont icon-you"></i>
			</div>
			<p  class="phone">
				<i class="iconfont icon-shouji"></i>
				<span>18735605086</span>
			</p>
		</div>
	</div>
	</div>
	<!--钱币buf-->
	<div class="money">
		<div>
			<div>540.0元</div>
			<div>
				<i class="iconfont icon-qianbao"></i>
				<span>钱包</span>
			</div>
		</div>
		<div>
			<div>16个</div>
			<div>
				<i class="iconfont icon-qianbao"></i>
				<span>优惠</span>
			</div>
		</div>
		<div>
			<div>2800个</div>
			<div>
				<i class="iconfont icon-qianbao"></i>
				<span>金币</span>
			</div>
		</div>
	</div>
	<!--地址客服部分-->
	<div class="location">
		<a href="#">
			<i class="iconfont icon-location"></i>
			<span>收货地址</span>
		</a>
		<div></div>
		<a href="#">
			<i class="iconfont icon-xin"></i>
			<span>我的收藏</span>
		</a>
		<div></div>
		<a href="#">
			<i class="iconfont icon-kefu"></i>
			<span>我的客服</span>
		</a>
	</div>
	<!--地址客服部分-->
	<div class="location">
		<a href="#">
			<i class="iconfont icon-location"></i>
			<span>收货地址</span>
		</a>
		<div></div>
		<a href="#">
			<i class="iconfont icon-xin"></i>
			<span>我的收藏</span>
		</a>
		<div></div>
		<a href="#">
			<i class="iconfont icon-kefu"></i>
			<span>我的客服</span>
		</a>
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
		<li class="hot">
			<a href="#">
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
</html>
<?php }
}
