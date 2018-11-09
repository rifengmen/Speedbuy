<?php
class cate extends main
{
    function __construct()
    {
        parent::__construct();
    }
    // 展示页面
    function init()
    {
        $cid = $_GET["cid"];
        $db = new DB("category");
        $cres = $db -> where("cid=$cid") -> select("*");
        $sres = $db -> where("pid=$cid") -> select("*");
        $this -> smarty -> assign("cres",$cres);
        $this -> smarty -> assign("sres",$sres);
        $this -> smarty -> display("cate.html");
    }
    //
    function query()
    {
        $page = $_GET["page"];
        $limit = $_GET["limit"];
        $cid = $_GET["cid"];
        $order = $_GET["order"];
        $pid = $_GET["pid"];
        $offset = ($page-1)*$limit;
        if ($cid) {
            $db = new DB("shop");
            $data =  $db -> where("cid=$cid") -> select("*");
            $pages = ceil(count($data)/$limit);
            $result = $db -> where("cid=$cid") -> order($order,"asc") -> limit($offset,$limit) -> select("*");
        }
        else {
            $db = new DB("category");
            $arr = $db -> where("pid=$pid") -> select("cid");
            $str = "";
            foreach ($arr as $v) {
                $str .= "{$v['cid']},";
            };
            $str = substr($str,0,-1);
            $sql = "select * from shop where cid in ($str) order by $order asc";
            $data = $db -> select($sql);
            $pages = ceil(count($data)/$limit);
            $sql = "select * from shop where cid in ($str) order by $order asc limit $offset,$limit";
            $result = $db -> select($sql);
        }
        echo json_encode([
            "result" => $result,
            "pages" => $pages
        ]);
    }
}