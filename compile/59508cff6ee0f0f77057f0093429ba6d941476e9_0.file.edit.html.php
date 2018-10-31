<?php
/* Smarty version 3.1.33, created on 2018-10-30 03:57:04
  from 'D:\wamp64\www\speedbuy\app\view\edit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd7d6902daaa4_00575407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59508cff6ee0f0f77057f0093429ba6d941476e9' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\edit.html',
      1 => 1540871815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd7d6902daaa4_00575407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertcate.css">
<div class="layui-body" style="padding: 50px">
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">父级栏目</label>
            <div class="layui-input-block">
                <select name="pid" lay-verify="required">
                    <option value="0">一级标题</option>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

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
        <div class="layui-form-item">
            <label class="layui-form-label">图片上传</label>
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <ul class="imgBox">
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['thumb'];?>
" id="test2" width="100">
                    <div class="mask"></div>
                    <div class="button">
                        <i class="layui-icon layui-icon-search"></i>
                        <i class="layui-icon layui-icon-delete"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!--隐藏的input，用来携带上传图片的路径-->
        <input type="hidden" name="thumb" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['thumb'];?>
">
        <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['cid'];?>
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
editcate.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
