<?php
class DB{
    public $mysql;
    public $tablename;
    function __construct($tablename)
    {
        $this -> config();
        $this -> tablename = $tablename;
    }
    function config() {
        $this -> mysql = new mysqli('localhost','root','','speedbuy','3306');
        if ($this -> mysql -> connect_errno) {
            echo "数据库连接失败，失败原因是" . $this -> mysql -> connect_errno;
            exit();
        }
        $this -> mysql -> query('set names utf8');
    }
    function insert($data) {
        if (is_array($data)) {
            $keys = array_keys($data);
            $sql = "insert into $this->tablename (";
            for ($i = 0;$i < count($keys); $i++) {
                $sql .= $keys[$i] . ",";
            };
            $sql = substr($sql,'0','-1') . ") values (";
            foreach ($data as $v) {
                $sql .= "'$v',";
            };
            $sql = substr($sql,'0','-1') . ")";
            $this -> mysql -> query($sql);
        }
        else if (is_string($data)) {
            $this -> mysql -> query($data);
        }
        return $this -> mysql -> affected_rows;
    }
    function update() {
    }
    function delete() {
    }
    function select() {
    }
}


