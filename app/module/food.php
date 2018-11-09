<?php
class food extends main
{
    function __construct()
    {
        parent::__construct();
    }
    function init ()
    {
        $this -> smarty -> display("food.html");
    }
}