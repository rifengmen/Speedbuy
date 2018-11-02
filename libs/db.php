<?php
class DB{
    public $mysql;
    public $tablename;
    private $wheresql;
    private $ordersql;
    private $limitsql;
    // 构造函数
    function __construct($tablename)
    {
        $this -> config();
        $this -> tablename = $tablename;
        $this -> wheresql = "";
        $this -> ordersql = "";
        $this -> limitsql = "";
    }
    // 连接数据库
    function config() {
        $this -> mysql = new mysqli('localhost','root','','speedbuy','3306');
        if ($this -> mysql -> connect_errno) {
            echo "数据库连接失败，失败原因是" . $this -> mysql -> connect_errno;
            exit();
        }
        $this -> mysql -> query('set names utf8');
    }
    // 数据库插入数据
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
        }
        else if (is_string($data)) {
            $sql = $data;
        }
        $this -> mysql -> query($sql);
        return $this -> mysql -> affected_rows;
    }
    // 数据库删除单条数据
    function delete($sql) {
        $sql = $sql;
        if (strpos($sql,"delete") !== false) {
            $this -> mysql -> query($sql);
        }
        else {
            $sql = "delete from $this->tablename where ".$sql;
            $this -> mysql -> query($sql);
        }
        return $this -> mysql -> affected_rows;
    }
    // 数据库删除多条数据
    function deletes($field,$str) {
        $sql = "delete from $this->tablename where $field in ($str)";
        $this -> mysql -> query($sql);
        return $this -> mysql -> affected_rows;
    }
    // 数据库修改数据
    function update($str) {
        if (is_string($str) && strpos($str,'update') !== false) {
            $sql = $str;
        }
        else if (is_string($str)) {
            $sql = "update $this->tablename set $str " . $this->wheresql;
        }
        else if (is_array($str)) {
            $sql = "update $this->tablename set ";
            foreach ($str as $key => $v) {
                $sql .= "$key='$v',";
            }
            $sql = substr($sql,'0','-1') . $this->wheresql;
        }
        $this -> mysql -> query($sql);
        return $this -> mysql -> affected_rows;
    }
    // 数据库查询数据
    function select($str) {
        if (is_string($str) && strpos($str,'select') !== false) {
            $sql = $str;
        }
        else {
            $sql = "select $str from $this->tablename ";
            $sql .= $this -> wheresql . $this -> ordersql . $this -> limitsql;
        }
        $res = $this -> mysql -> query($sql) -> fetch_all(MYSQLI_ASSOC);
        return $res;
    }
    // 指定数据库查询的字段
    function where($arr) {
        if (is_string($arr)) {
            $this -> wheresql = " where $arr ";
        }
        else if (is_array($arr) && count($arr)) {
            $this -> wheresql = " where ";
            foreach ($arr as $key => $v) {
                $this -> wheresql .= " $key='$v' " . "and";
            }
            $this -> wheresql = substr($this->wheresql,'0','-3');
        }
        return $this;
    }
    // 指定排序规则
    function order($key,$type) {
        $this -> ordersql = " order by $key $type ";
        return $this;
    }
    // 指定分页页码和显示条数
    function limit($offset,$limit) {
        $this -> ordersql = " limit $offset,$limit ";
        return $this;
    }
}


