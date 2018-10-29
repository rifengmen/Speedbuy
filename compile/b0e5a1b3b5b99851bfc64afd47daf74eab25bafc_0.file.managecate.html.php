<?php
/* Smarty version 3.1.33, created on 2018-10-26 15:22:37
  from 'D:\wamp64\www\speedbuy\app\view\managecate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd3313d1c5689_41383701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e5a1b3b5b99851bfc64afd47daf74eab25bafc' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\managecate.html',
      1 => 1540563651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd3313d1c5689_41383701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<style>
    .layui-table-cell {
        height: 50px;
        line-height: 50px;
        text-align: center;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .layui-btn-xs {
         height: auto;
        line-height: 30px;
        padding: 0px 16px;
        font-size: 14px;
    }
</style>
<div class="layui-body" style="padding: 50px">
    <table class="layui-hide" id="test"></table>
    <?php echo '<script'; ?>
 type="text/html" id="toolbar">
        <a class="layui-btn layui-btn-xs edits" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs dels" lay-event="del">删除</a>
    <?php echo '</script'; ?>
>
</div>
<div class="layui-footer">
    <!-- 底部固定区域 -->
    版权属于我
</div>
</div>
<?php echo '<script'; ?>
 src="<?php echo LAYUIJS_PATH;?>
layui.all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
managecate.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
