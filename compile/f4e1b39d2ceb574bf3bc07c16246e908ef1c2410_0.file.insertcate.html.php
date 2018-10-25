<?php
/* Smarty version 3.1.33, created on 2018-10-25 11:03:38
  from 'D:\wamp64\www\speedbuy\app\view\insertcate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd1a30ace3812_73319141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e1b39d2ceb574bf3bc07c16246e908ef1c2410' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\insertcate.html',
      1 => 1540465393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd1a30ace3812_73319141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
managecate.css">

<div class="layui-body">
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
                <input type="text" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">图片上传</label>
            <button type="button" class="layui-btn" id="test1">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>

        <input type="hidden" name="thumb">

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
insertcate.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
