<?php
class adminlogin extends main {
    function __construct()
    {
        parent::__construct();
    }

    function login() {
        $this -> smarty -> assign('name','朱晓琪');
        $this -> smarty -> display('adminlogin.html');
    }
    function check() {

    }
    function register() {
        $this -> smarty -> display('register.html');
    }
}