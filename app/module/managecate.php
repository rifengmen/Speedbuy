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
        $db = new DB();
        $obj = new Menu();
        $str = $obj -> getCate($db -> mysql,'category','0','0');
        $this -> smarty -> assign('str',$str);
        $this -> smarty -> assign('info',$this -> info);
        $this -> smarty -> display('insertcate.html');
    }
    function insert1() {
        echo "hahahha";
    }
}