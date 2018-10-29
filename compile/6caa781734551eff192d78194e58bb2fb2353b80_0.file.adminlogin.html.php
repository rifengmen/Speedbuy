<?php
/* Smarty version 3.1.33, created on 2018-10-28 02:27:13
  from 'D:\wamp64\www\speedbuy\app\view\adminlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd51e816d8b10_22647414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6caa781734551eff192d78194e58bb2fb2353b80' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\adminlogin.html',
      1 => 1540476858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd51e816d8b10_22647414 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>speedbuy后台登陆</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
adminlogin.css">
</head>
<body>
<!--大括号里是后台输出的数据，通过调用name名字获取value值，括号内不可使用空格，否则无法识别-->
<!--<h1> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </h1>-->
<div class="box">
    <img src="<?php echo IMG_PATH;?>
logo.png" alt="速买聚实惠">
    <h2>后台登陆(CMS)</h2>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">
                <i class="layui-icon layui-icon-username"></i>
            </label>
            <div class="layui-input-block">
                <input type="text" name="username" required  lay-verify="required|username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">
                <i class="layui-icon layui-icon-password"></i>
            </label>
            <div class="layui-input-block">
                <input type="password" name="password" required lay-verify="required|password" placeholder="请输入密码" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
            </div>
        </div>
    </form>
</div>
<div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner bgTop">
        <div class="wave waveTop"></div>
    </div>
    <div class="waveWrapperInner bgMiddle">
        <div class="wave waveMiddle"></div>
    </div>
    <div class="waveWrapperInner bgBottom">
        <div class="wave waveBottom"></div>
    </div>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
adminlogin.js"><?php echo '</script'; ?>
><?php }
}
