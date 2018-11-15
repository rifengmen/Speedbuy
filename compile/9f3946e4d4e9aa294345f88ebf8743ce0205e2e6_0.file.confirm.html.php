<?php
/* Smarty version 3.1.33, created on 2018-11-14 10:34:16
  from 'D:\wamp64\www\speedbuy\app\view\confirm.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bebfa281dea26_88433199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f3946e4d4e9aa294345f88ebf8743ce0205e2e6' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\confirm.html',
      1 => 1542191647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebfa281dea26_88433199 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
confirm.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
iconfont.css"/>
</head>
<body>
	<div class="windows">
	<!--头部-->
	<header>
		<a href="/speedbuy/index.php/shop?sid=1">
			<i class="iconfont icon-xiangzuo"></i>
			<span>返回</span>
		</a>
		<span>确认订单</span>
		<i></i>
	</header>
	<!--地址联系方式-->
	<div class="add">
		<p>
			<span>订单配送至</span>
			<span>家</span>
		</p>
		<p>
			<span>大同市御东新区东方名城好旺角2-2-2002</span>
			<i class="iconfont icon-you"></i>
		</p>
		<p>
			<span>门日峰（男）</span>
			<span>18735605086</span>
		</p>
	</div>
	<!--背景蓝-->
	<div class="blue">
	    <!--送达时间、支付方式-->
	    <div class="time">
		    <div class="down">
		    	<span>送达时间</span>
		    	<div>
		    		<span>送达时间（09:56送达）</span>
		    		<i class="iconfont icon-you"></i>
		    	</div>
	    	</div>
	    	<div class="fg"></div>
	    	<div class="up">
	    		<span>支付方式</span>
	    		<div>
		    		<span>支付宝新用户下单立减10元</span>
		    		<div>
		    			<span>支付方式</span>
		    			<i class="iconfont icon-you"></i>
		    		</div>
		    	</div>
		    </div>
	    </div>
	</div>
	<!--订单部分-->
	<div class="list">
		<h1>朴式拌饭</h1>
		<ul class="food">

		</ul>
		<div class="discount">
			<span>红包</span>
			<span>无可用红包</span>
		</div>
		<div class="total">
			<span>小计</span>
			<span>
				&yen;<span class="sum">111</span>
			</span>
		</div>
	</div>
	<!--备注部分-->
	<div class="remarks">
		<a href="#">
			<span>备注</span>
			<span>
				<span>口味、偏好等要求</span>
				<i class="iconfont icon-you"></i>
			</span>
		</a>
		<div></div>
		<a href="#">
			<span>餐具数量</span>
			<span>
				<span class="green">让我们一起为环保助力</span>
				<span>未选择</span>
				<i class="iconfont icon-you"></i>
			</span>
		</a>
		<div></div>
		<a href="#">
			<span>发票</span>
			<span>
				<span>请填写发票抬头信息</span>
				<i class="iconfont icon-you"></i>
			</span>
		</a>
	</div>
	<!--站位栏-->
	<div class="zhanwei"></div>
	</div>
	<!--结算栏-->
	<div class="pay">
		<div class="number">
			&yen;<span>172</span>
		</div>
		<div class="left">
			<span class="down">
				已优惠<span>20</span>元
			</span>
			<span class="up">
				另需配送费<span>11</span>元
			</span>
		</div>
		<a class="right">立即支付</a>
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
confirm.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
