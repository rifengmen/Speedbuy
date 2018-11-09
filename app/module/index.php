<?php
class index extends main {
    function __construct()
    {
        parent::__construct();
    }
    // 显示页面
    function init() {
        $db = new DB("category");
        $res = $db -> where("pid=0") -> select("*");
        $num = ceil(count($res)/8) - 1;
        $this -> smarty -> assign("num",$num);
        $this -> smarty -> assign("res",$res);
        $this -> smarty -> display('index.html');
    }
}