<?php
/* Smarty version 3.1.33, created on 2018-10-25 10:23:56
  from 'D:\wamp64\www\speedbuy\app\view\managecate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd199bc33f597_51799119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e5a1b3b5b99851bfc64afd47daf74eab25bafc' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\managecate.html',
      1 => 1540463033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd199bc33f597_51799119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
    <div class="layui-body">

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
</body>
</html><?php }
}
