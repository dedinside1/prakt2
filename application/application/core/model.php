<?php

class Model
{
    public function get_data()
    {
    }
    public function __construct()
    {

        mysqli_set_charset($this->link=new mysqli(
            $GLOBALS['host'],
            $GLOBALS['username'],
            $GLOBALS['password'],
            $GLOBALS['database']),
            'utf8')or die("Error");
    }
}
