<?php
class managecate extends main {
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
        $this -> smarty -> display('managecate.html');
    }
    // 显示添加栏目页面
    function insert() {
    $db = new DB('category');
    $obj = new Menu();
    $str = $obj -> getCate($db -> mysql,'category','0','0');
    $this -> smarty -> assign('str',$str);
    $this -> smarty -> assign('info',$this -> info);
    $this -> smarty -> display('insertcate.html');
    }
    // 数据库添加栏目
    function insert1() {
        $data = $_GET;
        $db = new DB('category');
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
        $field = isset($_GET['field']) ? $_GET["field"] : "cid";
        $order = isset($_GET['order']) ? $_GET["order"] : "asc";
        $db = new DB('category');
        $offset = ($page-1)*$limit;
        $arr = $_GET;
        $arr = array_filter($arr);
        unset($arr['page']);
        unset($arr['limit']);
        unset($arr['field']);
        unset($arr['order']);
        $res = $db -> where($arr) -> order($field,$order) -> limit($offset,$limit) -> select("*");
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
        $cid = $_GET['cid'];
        $db = new DB('category');
        $rows = $db -> delete("cid=$cid");
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '删除成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '删除失败']);
        }
    }
    // 显示编辑栏目页面
    function edit() {
        $cid = $_GET['cid'];
        $db = new DB('category');
        $obj = new Menu();
        $str = $obj -> getCate($db -> mysql,'category','0','0',$cid);
        $res = $db -> where("cid=$cid") -> select('*')[0];
        $this -> smarty -> assign('str',$str);
        $this -> smarty -> assign('res',$res);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display("edit.html");
    }
    // 提交编辑后的栏目给数据库
    function update() {
        $data = $_GET;
        $cid = $_GET['cid'];
        unset($data['cid']);
        $db = new DB('category');
        $rows = $db -> where("cid=$cid") -> update($data);
        if ($rows == 1) {
            echo json_encode(['code' => 0,'msg' => '栏目修改成功']);
        }
        else {
            echo json_encode(['code' => 1,'msg' => '栏目修改失败']);
        }
    }

}