<?php
/* Smarty version 3.1.33, created on 2018-11-02 05:11:24
  from 'D:\wamp64\www\speedbuy\app\view\managegtype.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bdbdc7c757ad2_15943033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089571d1a1fe654ab73ff5abf470163875e031e0' => 
    array (
      0 => 'D:\\wamp64\\www\\speedbuy\\app\\view\\managegtype.html',
      1 => 1541135482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:slide.html' => 1,
  ),
),false)) {
function content_5bdbdc7c757ad2_15943033 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="demoTable">
        搜索GID：
        <div class="layui-inline">
            <input class="layui-input" name="gid" id="gid" autocomplete="off">
        </div>
        搜索分类名称：
        <div class="layui-inline">
            <input class="layui-input" name="title" id="title" autocomplete="off">
        </div>
        搜索店铺：
        <div class="layui-inline">
            <input class="layui-input" name="sid" id="sid" autocomplete="off">
        </div>
        <button class="layui-btn" data-type="reload">搜索</button>
    </div>
    <table class="layui-hide" id="test" lay-filter="test"></table>
    <?php echo '<script'; ?>
 type="text/html" id="toolbar">
        <a class="layui-btn layui-btn-xs edits" lay-event="edit">编辑</a>
        <a class="layui-btn layui-btn-danger layui-btn-xs dels" lay-event="del">删除</a>
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/html" id="toolbar2">
        <div class="layui-btn-container">
            <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
            <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
            <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
            <button class="layui-btn layui-btn-sm" lay-event="allDelete">删除选中项</button>
        </div>
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
managegtype.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
