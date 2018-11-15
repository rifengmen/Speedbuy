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
        $db = new DB("goods");
        $goods = $db -> limit("22","3") -> select("*");
        $this -> smarty -> assign("goods",$goods);
        $this -> smarty -> assign("num",$num);
        $this -> smarty -> assign("res",$res);
        $this -> smarty -> display('index.html');
    }
    // 查询商家信息
    function query()
    {
        $key = $_GET["key"];
        $limit = $_GET["limit"];
        $page = $_GET["page"];
        $type = "desc";
        $offset = ($page - 1) * $limit;
        $db = new DB("shop");
        $data = $db -> select("*");
        $pages = ceil(count($data)/$limit);
        $result = $db -> order("$key","$type") -> limit("$offset","$limit") -> select("*");
        echo json_encode([
            "result" => $result,
            "pages" => $pages
        ]);
    }
}