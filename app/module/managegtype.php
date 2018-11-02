<?php
class managegtype extends main {
    // 构造函数
    function __construct()
    {
        parent::__construct();
        session_start();
        $this -> info = $_SESSION['info'];
    }
    // 显示页面
    function init() {
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('managegtype.html');
    }
    // 显示添加商品分类页面
    function insert() {
        $db = new DB('shop');
        $str = $db -> select("sid,shopname");
        $this -> smarty -> assign('str',$str);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('insertgtype.html');
    }
    // 数据库添加商品分类
    function insert1() {
        $data = $_GET;
        $db = new DB('goodstype');
        $rows = $db -> insert($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '栏目插入成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '栏目插入失败']);
        }
    }
    // 查看数据库数据
    function query() {
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $field = isset($_GET['field']) ? $_GET["field"] : "sid";
        $order = isset($_GET['order']) ? $_GET["order"] : "asc";
        $db = new DB('goodstype,shop');
        $offset = ($page-1)*$limit;
        $arr = $_GET;
        $arr = array_filter($arr);
        unset($arr['page']);
        unset($arr['limit']);
        unset($arr['field']);
        unset($arr['order']);
        $str = "goodstype.sid=shop.sid";
        $res = $db -> where($str) -> order($field,$order) -> limit($offset,$limit) -> select("goodstype.*,shop.shopname");
        $db = new DB('goodstype');
        $result = $db -> where($arr) -> order($field,$order) -> select('*');
        $data = [];
        $data['code'] = 0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($result);
        $data['data'] = $res;
        echo json_encode($data);
    }
    // 删除数据库数据
    function delete() {
        $gid = $_GET['gid'];
        $db = new DB('goodstype');
        $rows = $db -> delete("gid=$gid");
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '删除成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '删除失败']);
        }
    }
    // 删除多条数据
    function deletes() {
        $gid = $_GET["gid"];
        $db = new DB("goodstype");
        $rows = $db -> deletes("gid",$gid);
        if ($rows > 0) {
            echo json_encode(['code' => 0,'msg' => '删除成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '删除失败']);
        }
    }
    // 显示编辑商品分类页面
    function edit() {
        $gid = $_GET['gid'];
        $db = new DB('goodstype');
        $res = $db -> where("gid=$gid") -> select('*')[0];
        $db = new DB("shop");
        $sres = $db -> select("*");
        $this -> smarty -> assign('sres',$sres);
        $this -> smarty -> assign('res',$res);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display("editgtype.html");
    }
    // 提交编辑后的商品分类给数据库
    function update() {
        $data = $_POST;
        $gid = $_POST['gid'];
        unset($data['gid']);
        $db = new DB('goodstype');
        $rows = $db -> where("gid=$gid") -> update($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '栏目修改成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '栏目修改失败']);
        }
    }
}
