<?php

abstract class Model
{
    /**
     * @var PDO
     */
    protected $_pdo;

    public function __construct(){
        $this->_pdo = new PDO('mysql:dbname=shop-test;host=localhost', 'root', '');
    }


    public function get_data()
    {
    }
}