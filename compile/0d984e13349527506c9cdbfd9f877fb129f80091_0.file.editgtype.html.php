<?php
/* Smarty version 3.1.33, created on 2018-11-02 02:16:25
  from 'D:\wamp64\www\speedbuy\app\view\editgtype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdbb37985eb38_09097075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d984e13349527506c9cdbfd9f877fb129f80091' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\editgtype.html',
      1 => 1541124976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdbb37985eb38_09097075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<div class="layui-body" style="padding: 50px">
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">父级栏目</label>
            <div class="layui-input-block">
                <select name="sid" lay-verify="required">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sres']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value["sid"] == $_smarty_tpl->tpl_vars['res']->value["sid"]) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" selected> <?php echo $_smarty_tpl->tpl_vars['v']->value['shopname'];?>
 </option>
                    <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"> <?php echo $_smarty_tpl->tpl_vars['v']->value['shopname'];?>
 </option>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">栏目名称</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
">
            </div>
        </div>
        <!--隐藏的input，用来携带信息-->
        <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['gid'];?>
">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="submit">确认修改</button>
            </div>
        </div>
    </form>
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
editgtype.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
