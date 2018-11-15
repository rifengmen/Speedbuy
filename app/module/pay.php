<?php
class pay extends main
{
    function __construct()
    {
        parent::__construct();
    }
    // 打开支付完成页面
    function init()
    {
        $discount = $_GET["discount"];
        $uid = $_GET["uid"];
        $this -> smarty -> assign("discount",$discount);
        $this -> smarty -> assign("uid",$uid);
        $this -> smarty -> display("pay.html");
    }
}