<?php

abstract class Model {
  protected $_pdo;
  public function __construct(){
    $this->_pdo = new PDO('mysql:dbname=shop-test;host=localhost;charset=utf8', 'root', '');
  }
  public function get_data() {}
}