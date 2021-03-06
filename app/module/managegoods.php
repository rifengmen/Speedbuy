<?php
class managegoods extends main{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this -> info = $_SESSION['info'];
    }
    // 展示查看店铺页面
    function init() {
        $this -> smarty -> assign("info",$this->info);
        $this -> smarty -> display("managegoods.html");
    }
    // 展示添加商品页面
    function insert() {
        $db = new DB('shop');
        $shopname = $db -> select("shopname,sid");
        $this -> smarty -> assign('shopname',$shopname);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('insertgoods.html');
    }
    // 选择店铺
    function insert2() {
        $db = new DB('goodstype');
        $sid = $_GET["sid"];
        $goodstype = $db -> where("sid=$sid") -> select("title,gid");
        echo json_encode($goodstype);
    }
    // 执行添加商品指令
    function insert1() {
        $data = $_POST;
        $db = new DB('goods');
        $rows = $db -> insert($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '栏目插入成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '栏目插入失败']);
        }
    }
    // 执行查看商品指令
    function query() {
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $field = isset($_GET['field']) ? $_GET["field"] : "gid";
        $order = isset($_GET['order']) ? $_GET["order"] : "asc";
        $db = new DB('goods,goodstype,shop');
        $offset = ($page-1)*$limit;
        $arr = $_GET;
        $arr = array_filter($arr);
        unset($arr['page']);
        unset($arr['limit']);
        unset($arr['field']);
        unset($arr['order']);
        $str = "goods.gid=goodstype.gid and goodstype.sid=shop.sid";
        $res = $db -> where($str) -> order($field,$order) -> limit($offset,$limit) -> select("goods.*,shop.shopname,goodstype.title as cname");
        $db = new DB("goods");
        $result = $db -> where($arr) -> order($field,$order) -> select('*');
        $data = [];
        $data['code'] = 0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($result);
        $data['data'] = $res;
        echo json_encode($data);
    }
    // 执行删除商品指令
    function delete() {
        $id = $_GET['id'];
        $db = new DB('goods');
        $rows = $db -> delete("id=$id");
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '删除成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '删除失败']);
        }
    }
    // 多个商品同时删除指令
    function deletes() {
        $id = $_GET['id'];
        $db = new DB('goods');
        $rows = $db -> deletes("id",$id);
        if ($rows > 0 ) {
            echo json_encode(["code" => 0, "msg" => "删除成功"]);
        }
        else {
            echo json_encode(["code" => 1, "msg" => "删除失败"]);
        }
    }
    // 展示修改商品内容页面
    function edit() {
        $db = new DB('shop');
        $shopname = $db -> select("shopname,sid");
        $db = new DB('goodstype');
        $goodstype = $db -> select("title,gid");
        $id = $_GET['id'];
        $db = new DB('goods');
        $res = $db -> where("id=$id") -> select('*')[0];
        $this -> smarty -> assign('res',$res);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> assign('shopname',$shopname);
        $this -> smarty -> assign('goodstype',$goodstype);
        $this -> smarty -> display("editgoods.html");
    }
    // 执行修改商品内容指令
    function update() {
        $data = $_GET;
        $id = $_GET['id'];
        unset($data['id']);
        $db = new DB('goods');
        $rows = $db -> where("id=$id") -> update($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '商品修改成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '商品修改失败']);
        }
    }

}