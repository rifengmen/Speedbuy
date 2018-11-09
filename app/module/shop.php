<?php
class shop extends main
{
    function __construct()
    {
        parent::__construct();
    }
    function init()
    {
        $this -> smarty -> display("shop.html");
    }
}