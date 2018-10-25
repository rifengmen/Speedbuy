<?php
class main{
    // 定义一个全局属性
    public $smarty;
    // 构造函数
    function __construct()
    {
        // 实例化一个smarty
        $this -> smarty = new Smarty();
        // 初始化
        $this -> smarty -> setTemplateDir('app/view');
        // 初始化
        $this -> smarty -> setCompileDir('compile');
    }
}