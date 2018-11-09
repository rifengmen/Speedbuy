<?php
class my extends main
{
    public function __construct()
    {
        parent::__construct();
    }
    // 打开登录页面
    function init ()
    {
        $this -> smarty -> display("login.html");
    }
    // 打开注册页面
    function registeruser ()
    {
        $this -> smarty -> display("registeruser.html");
    }
    // 验证手机号是否已被注册
    function phone()
    {
        $phone = $_POST['phone'];
        $db = new DB("users");
        $res = $db -> where("phone=$phone") -> select("*");
        if ($res) {
            echo "false";//存在就返回false
        }
        else {
            echo "true";// 不存在放回true
        }
    }
    // 插入数据到数据库
    function insert()
    {
        $data = $_POST;
        unset($data["password1"]);
        $data['password'] = md5($data['password']);
        $phone = $_POST['phone'];
        $db = new DB("users");
        $res = $db -> where("phone=$phone") -> select("*");
        if (!$res) {
            $rows = $db -> insert($data);
            if ($rows == 1) {
                echo json_encode(["code" => 0, "msg" => "插入成功"]);
            }
            else {
                echo json_encode(["code" => 1, "msg" => "插入失败"]);
            }
        }
        else {
            echo json_encode(["code" => 1, "msg" => "账号已存在"]);
        }
    }
    // 验证码
    function code()
    {
        $code = new code();
        $code -> output();
        session_start();
        $_SESSION["usercode"] = $code -> result;
    }
    // 验证验证码
    function remotecode()
    {
        $code = $_POST['code'];
        session_start();
        if ($_SESSION['usercode'] != $code) {
            echo "false";
        }
        else if ($_SESSION['usercode'] == $code) {
            echo "true";
        }
    }
    // 验证登录信息是否正确
    function login()
    {
        $code = $_POST['code'];
        session_start();
        if ($_SESSION['usercode'] == $code) {
            $phone = $_POST['phone'];
            $password = md5($_POST['password']);
            $db = new DB('users');
            $res = $db -> where("phone=$phone") -> select("*");
            if ($res && $res[0]['password'] == $password) {
                $_SESSION['islogin'] = "yes";
                $_SESSION['phone'] = $res[0]['id'];
                echo json_encode(["code" => 0, "msg" => "登录成功"]);
            }
            else if ($res && $res[0]['password'] != $password) {
                echo json_encode(["code" => 1, "msg" => "密码错误"]);
            }
            else if (!$res) {
                echo json_encode(["code" => 1, "msg" => "账号不存在"]);
            }
        }
        else {
            echo json_encode(["code" => 1, "msg" => "验证码错误"]);
        }
    }
    // 打开我的页面
    function querymy()
    {
        $this -> smarty -> display("my.html");
    }
}