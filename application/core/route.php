<?php
// Маршрутизация, выбор нужных элементов;
class Route {
  static function start() {
    // контроллер и действие по умолчанию, начальный адрес;
    $controller_name = 'Main';
    $action_name = 'index';
    $params = null;
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    // получаем имя контроллера, если оно есть;
    // Изменены индексы массива (+1) для удобства работы с xampp и smartgit;
    if (!empty($routes[2])) {
      $controller_name = $routes[2];
    }
    // тоже самое с именем экшена, если нету, то параметр по умолчанию;
    if (!empty($routes[3])) {
      $action_name = $routes[3];
    }
    // Параметры;
    if(!empty(array_slice($routes, 4))){
      $params = array_slice($routes, 4);
    }
    // добавляем префиксы;
    $model_name = 'Model_' . $controller_name;
    $controller_name = 'Controller_' . $controller_name;
    $action_name = 'action_' . $action_name;
    // подцепляем файл с классом модели (файла модели может и не быть);
    $model_file = strtolower($model_name) . '.php'; // TODO: Посмотреть strtolower;
    $model_path = "application/models/" . $model_file;
    if (file_exists($model_path)) {
      include "application/models/" . $model_file;
    }
    // подцепляем файл с классом контроллера
    $controller_file = strtolower($controller_name) . '.php';
    $controller_path = "application/controllers/" . $controller_file;
    if (file_exists($controller_path)) {
      include "application/controllers/" . $controller_file;
    } else {
      // Здесь можно кинуть исключение;
      Route::ErrorPage404();
    }
    // Есть ли в файле-контролере одноименный класс, если нету то...;
    if(!class_exists($controller_name)){
      Route::ErrorPage404();
    } else {
      $controller = new $controller_name;
      // методы контролера;
      $action = $action_name;
      // есть ли в контролере соответствующий метод;
      if (method_exists($controller, $action)) {
        // вызываем действие контроллера;
        if($params){
          $controller->$action($params);
        } else {
          $controller->$action();
        }

      } else {
        // здесь также разумнее было бы кинуть исключение
        Route::ErrorPage404();
      }
    }
  }
  function ErrorPage404() {
    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
    header('HTTP/1.1 404 Not Found');
    header("Status: 404 Not Found");
    header('Location:' . $host . '404');
  }
}