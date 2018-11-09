<?php
/* Smarty version 3.1.33, created on 2018-11-05 05:36:01
  from 'D:\wamp64\www\speedbuy\app\view\editgoods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdfd6c1996797_39853769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '678a3dbfa036df83bc70e5d22eb2b9c0e7d6e791' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\editgoods.html',
      1 => 1541396160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdfd6c1996797_39853769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertshop.css">
<div class="layui-body" style="padding: 50px">
    <form class="layui-form" action="" lay-filter="test">
        <!--所属店铺-->
        <div class="layui-form-item">
            <label class="layui-form-label">所属店铺</label>
            <div class="layui-input-block">
                <select name="sid" lay-verify="required" lay-filter="filter">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shopname']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value['sid'] == $_smarty_tpl->tpl_vars['v']->value['sid']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['shopname'];?>
</option>
                    <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['shopname'];?>
</option>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <!--所属分类-->
        <div class="layui-form-item">
            <label class="layui-form-label">所属分类</label>
            <div class="layui-input-block">
                <select name="gid" lay-verify="required">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodstype']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['res']->value['gid'] == $_smarty_tpl->tpl_vars['v']->value['gid']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
                    <?php } else { ?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
                    <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
        <!--商品名称-->
        <div class="layui-form-item">
            <label class="layui-form-label">商品名称</label>
            <div class="layui-input-block">
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入商品名称" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['title'];?>
">
            </div>
        </div>
        <!--介绍-->
        <div class="layui-form-item">
            <label class="layui-form-label">商品介绍</label>
            <div class="layui-input-block">
                <input type="text" name="des" required  lay-verify="required" placeholder="请输入商品介绍" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['des'];?>
">
            </div>
        </div>
        <!--原价-->
        <div class="layui-form-item">
            <label class="layui-form-label">原价</label>
            <div class="layui-input-block">
                <input type="text" name="price" required  lay-verify="required" placeholder="请输入原价" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['price'];?>
">
            </div>
        </div>
        <!--折扣价-->
        <div class="layui-form-item">
            <label class="layui-form-label">折扣价</label>
            <div class="layui-input-block">
                <input type="text" name="discount" required  lay-verify="required" placeholder="请输入折扣价" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['discount'];?>
">
            </div>
        </div>
        <!--缩略图-->
        <div class="layui-form-item">
            <label class="layui-form-label">缩略图上传</label>
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>
        <!--隐藏的input，用来携带上传缩略图的路径-->
        <input type="hidden" name="thumb" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['thumb'];?>
">
        <!--隐藏的input，用来携带对应的id-->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
">
        <!--预览缩略图-->
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <ul class="imgBox">
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['thumb'];?>
" width="100">
                    <div class="mask"></div>
                    <div class="button">
                        <i class="layui-icon layui-icon-search"></i>
                        <i class="layui-icon layui-icon-delete"></i>
                    </div>
                </li>
            </ul>
        </div>
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="submit">立即提交</button>
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
editgoods.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
