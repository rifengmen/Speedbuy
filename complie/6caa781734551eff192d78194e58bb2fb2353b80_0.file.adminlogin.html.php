<?php
/* Smarty version 3.1.33, created on 2018-10-24 10:45:49
  from 'D:\wamp64\www\speedbuy\app\view\adminlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd04d5df3ebd8_51466764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6caa781734551eff192d78194e58bb2fb2353b80' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\adminlogin.html',
      1 => 1540377949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd04d5df3ebd8_51466764 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/speedbuy/static/css/layui.css">

</head>
<body>
<button class="layui-btn">默认</button>
<div class="layui-anim layui-anim-up"></div>
<h1> <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 </h1>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-anim layui-anim-up layui-anim-loop"></div>
    </div>
</div>
<div class="layui-progress">
    <div class="layui-progress-bar" lay-percent="10%"></div>
</div>
<div class="layui-progress layui-progress-big">
    <div class="layui-progress-bar" lay-percent="20%"></div>
</div>

<div class="layui-progress layui-progress-big">
    <div class="layui-progress-bar layui-bg-orange" lay-percent="50%"></div>
</div>

<div class="layui-progress layui-progress-big" lay-showPercent="true">
    <div class="layui-progress-bar layui-bg-blue" lay-percent="80%"></div>
</div>
</body>
<?php echo '<script'; ?>
 src="/speedbuy/static/layui.all.js"><?php echo '</script'; ?>
>
</html><?php }
}
