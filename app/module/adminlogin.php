<?php
class adminlogin extends main {
    // 构造函数
    function __construct()
    {
        parent::__construct();
    }
    // 打开页面
    function init() {
        // display(‘’) 括号里写要打开的页面
        $this -> smarty -> display('adminlogin.html');
    }
    // 验证登录账号密码
    function check() {
        $mysql = new mysqli('localhost','root','','speedbuy','3306');
        if ($mysql -> connect_errno) {
            echo "数据库连接失败，失败原因是" . $mysql -> connect_errno;
            exit();
        }
        $mysql -> query('set names utf8');
        $username = $_GET['username'];
        $password = MD5($_GET['password']);
        $sql = "select * from manage where username='$username' and password='$password'";
        $res = $mysql -> query($sql) -> fetch_assoc();
        if ($res) {
            session_start();
            $_SESSION['info'] = $res;
            echo "success";
        }
        else {
            echo "fail";
        }
    }
}