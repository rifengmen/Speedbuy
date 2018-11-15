<?php
class order extends main
{
    function __construct()
    {
        parent::__construct();
    }
    // 打开订单页面
    function init()
    {
        if (!$this -> islogin()) {
            $this -> smarty -> display("login.html");
        }
        else {
            $this -> smarty -> display("order.html");
        }
    }
    // 查询购买记录
    function query()
    {
        session_start();
        $uid = $_SESSION["userid"];
        $limit = $_GET["limit"];
        $page = $_GET["page"];
        $offset = ($page - 1) * $limit;
        $db = new DB("orders");
        $data = $db -> where("uid=$uid") -> select("*");
        $pages = ceil(count($data)/$limit);
        $orders = $db -> order("ctime","desc") -> where("uid=$uid") -> limit($offset,$limit) -> select("*");
        $db = new DB("shop,orderextra");
        for ($i = 0; $i < count($orders); $i++) {
            $oid = $orders[$i]['oid'];
            $str = "shop.sid=orderextra.sid and oid=$oid";
            $shopname = $db -> where($str) -> select("shop.shopname,orderextra.sid,shop.sthumb");
            $orders[$i]["shopname"] = $shopname[0]["shopname"];
            $orders[$i]["sid"] = $shopname[0]["sid"];
            $orders[$i]["sthumb"] = $shopname[0]["sthumb"];
        }
        echo json_encode([
            "orders" => $orders,
            "pages" => $pages
        ]);
    }
}
