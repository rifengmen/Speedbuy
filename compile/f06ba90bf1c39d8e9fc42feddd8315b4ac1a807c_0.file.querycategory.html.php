<?php
/* Smarty version 3.1.33, created on 2018-10-25 14:00:41
  from 'D:\wamp64\www\speedbuy\app\view\managecate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd1cc896af722_66590949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06ba90bf1c39d8e9fc42feddd8315b4ac1a807c' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\managecate.html',
      1 => 1540476034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd1cc896af722_66590949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
managecate.css">

<div class="layui-body">

    <table class="layui-hide" id="test">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>

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
querycategory.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
