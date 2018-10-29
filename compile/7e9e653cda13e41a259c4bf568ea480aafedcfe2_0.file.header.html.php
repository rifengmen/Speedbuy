<?php
/* Smarty version 3.1.33, created on 2018-10-25 14:15:21
  from 'D:\wamp64\www\speedbuy\app\view\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd1cff9b06bb9_69219713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e9e653cda13e41a259c4bf568ea480aafedcfe2' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\header.html',
      1 => 1540476920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1cff9b06bb9_69219713 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>speedbuy后台管理系统</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">
            <img src="<?php echo IMG_PATH;?>
logo.png" alt="" style="width: 100px">
            CMS系统
        </div>
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">商品管理</a></li>
            <li class="layui-nav-item"><a href="">用户</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">其它系统</a>
                <dl class="layui-nav-child">
                    <dd><a href="">邮件管理</a></dd>
                    <dd><a href="">消息管理</a></dd>
                    <dd><a href="">授权管理</a></dd>
                </dl>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['thumb'];?>
" class="layui-nav-img">
                    <?php echo $_smarty_tpl->tpl_vars['info']->value['username'];?>

                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退了</a></li>
        </ul>
    </div><?php }
}
