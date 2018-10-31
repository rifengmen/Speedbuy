<?php
/* Smarty version 3.1.33, created on 2018-10-30 15:25:09
  from 'D:\wamp64\www\speedbuy\app\view\editshop.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bd877d54bb4a8_61522559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb55e065e35c98dd0e900e0635950c271b34f614' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\editshop.html',
      1 => 1540913069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bd877d54bb4a8_61522559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php $_smarty_tpl->_subTemplateRender('file:slide.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
insertshop.css">
<div class="layui-body" style="padding: 50px">
    <form class="layui-form" action="">
        <!--所属分类-->
        <div class="layui-form-item">
            <label class="layui-form-label">所属分类</label>
            <div class="layui-input-block">
                <select name="cid" lay-verify="required">
                    <option value="0">一级标题</option>
                    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                </select>
            </div>
        </div>
        <!--店铺名称-->
        <div class="layui-form-item">
            <label class="layui-form-label">店铺名称</label>
            <div class="layui-input-block">
                <input type="text" name="shopname" required  lay-verify="required" placeholder="请输入店铺名称" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['shopname'];?>
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
        <!--预览缩略图-->
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <ul class="imgBox">
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['sthumb'];?>
" width="100">
                    <div class="mask"></div>
                    <div class="button">
                        <i class="layui-icon layui-icon-search"></i>
                        <i class="layui-icon layui-icon-delete"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!--公告-->
        <div class="layui-form-item">
            <label class="layui-form-label">店铺公告</label>
            <div class="layui-input-block">
                <input type="text" name="notice" required  lay-verify="required" placeholder="请输入公告信息" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['notice'];?>
">
            </div>
        </div>
        <!--派送费-->
        <div class="layui-form-item">
            <label class="layui-form-label">派送费</label>
            <div class="layui-input-block">
                <input type="text" name="fee" required  lay-verify="required" placeholder="请输入配送费" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['fee'];?>
">
            </div>
        </div>
        <!--实景图片-->
        <div class="layui-form-item">
            <label class="layui-form-label">实景图片</label>
            <button type="button" class="layui-btn" id="test2">
                <i class="layui-icon">&#xe67c;</i>上传图片
            </button>
        </div>
        <!--预览实景图片-->
        <div class="layui-form-item">
            <label class="layui-form-label"></label>
            <ul class="imgBox2">
                <li>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['res']->value['views'];?>
" width="100">
                    <div class="mask"></div>
                    <div class="button">
                        <i class="layui-icon layui-icon-search"></i>
                        <i class="layui-icon layui-icon-delete"></i>
                    </div>
                </li>
            </ul>
        </div>
        <!--口号-->
        <div class="layui-form-item">
            <label class="layui-form-label">店铺口号</label>
            <div class="layui-input-block">
                <input type="text" name="slogan" required  lay-verify="required" placeholder="请输入店铺口号" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['slogan'];?>
">
            </div>
        </div>
        <!--类型-->
        <div class="layui-form-item">
            <label class="layui-form-label">店铺</label>
            <div class="layui-input-block">
                <input type="text" name="stype" required  lay-verify="required" placeholder="请输入店铺名称" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['stype'];?>
">
            </div>
        </div>
        <!--电话-->
        <div class="layui-form-item">
            <label class="layui-form-label">店铺电话</label>
            <div class="layui-input-block">
                <input type="text" name="sphone" required  lay-verify="required" placeholder="请输入店铺电话" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['sphone'];?>
">
            </div>
        </div>
        <!--隐藏的input，用来携带上传缩略图的路径-->
        <input type="hidden" name="sthumb" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['sthumb'];?>
">
        <!--隐藏的input，用来携带上传实景图的路径-->
        <input type="hidden" name="views" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['views'];?>
">
        <!--隐藏的input，用来携带上传实景图的sid-->
        <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['sid'];?>
">
        <div class="layui-form-item">
            <div class="layui-input-block">
                <button class="layui-btn" lay-submit lay-filter="submit">立即修改</button>
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
editshop.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}