<?php
/* Smarty version 3.1.33, created on 2018-10-30 07:29:42
  from 'D:\wamp64\www\speedbuy\app\view\slide.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd80866749017_86850667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038667682efe2943d250209bb31a877ee81762df' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\slide.html',
      1 => 1540884581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd80866749017_86850667 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
        <!-- 左侧导航区域 -->
        <ul class="layui-nav layui-nav-tree"  lay-filter="test">
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">栏目管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="/speedbuy/index.php/managecate/insert">添加栏目</a></dd>
                    <dd><a href="/speedbuy/index.php/managecate">查看栏目</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-nav-itemed">
                <a class="" href="javascript:;">店铺管理</a>
                <dl class="layui-nav-child">
                    <dd><a href="/speedbuy/index.php/manageshop/insert">添加店铺</a></dd>
                    <dd><a href="/speedbuy/index.php/manageshop">查看店铺</a></dd>
                </dl>
            </li>
        </ul>
    </div>
</div><?php }
}
