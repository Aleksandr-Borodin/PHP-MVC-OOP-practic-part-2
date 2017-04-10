<?php
abstract class Controller {
  public $model;
  public $view;
  function __construct() {
    // Сразу подключается базовый класс для отображения-просмотра;
    $this->view = new View();
  }
  abstract function action_index();
}