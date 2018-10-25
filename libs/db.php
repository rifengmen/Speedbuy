<?php
class DB{
    public $mysql;
    function __construct()
    {
        $this -> config();
    }
    function config() {
        $this -> mysql = new mysqli('localhost','root','','speedbuy','3306');
        if ($this -> mysql -> connect_errno) {
            echo "数据库连接失败，失败原因是" . $this -> mysql -> connect_errno;
            exit();
        }
        $this -> mysql -> query('set names utf8');
    }
}


