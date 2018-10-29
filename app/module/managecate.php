<?php
class managecate extends main {
    function __construct()
    {
        parent::__construct();
        session_start();
        $this -> info = $_SESSION['info'];
    }
    function init() {
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('managecate.html');
    }
    function insert() {
        $db = new DB('category');
        $obj = new Menu();
        $str = $obj -> getCate($db -> mysql,'category','0','0');
        $this -> smarty -> assign('str',$str);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('insertcate.html');
    }
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
    function query() {
        $page = $_GET['page'];
        $limit = $_GET['limit'];
        $db = new DB('category');
        $offset = ($page-1)*$limit;
        $result = $db -> mysql -> query("select * from $db->tablename") -> fetch_all(MYSQLI_ASSOC);
        $res = $db -> mysql -> query("select * from $db->tablename order by cid asc limit $offset,$limit") -> fetch_all(MYSQLI_ASSOC);
        $data = [];
        $data['code'] = 0;
        $data['msg'] = '数据获取成功';
        $data['count'] = count($result);
        $data['data'] = $res;
        echo json_encode($data);
    }
    function select() {
        $cid = $_GET['cid'];
        $db = new DB('category');
        $res = $db -> mysql -> query("select * from $db->tablename where cid=$cid") -> fetch_assoc();
        echo json_encode($res);
    }
}