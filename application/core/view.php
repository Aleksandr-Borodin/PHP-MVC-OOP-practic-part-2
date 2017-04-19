<?php
// Базовый класс для отображения, принимает параметры, подключает файл;
class View {
  //public $template_view; // здесь можно указать общий вид по умолчанию.
  /**
  $content_view - виды отображающие контент страниц;
  $template_view - общий для всех страниц шаблон;
  null $data -  массив, содержащий элементы контента страницы. Обычно заполняется в модели.
  */
  function generate($content_view, $template_view, $data = null) {
    if(is_array($data)) {
      // преобразуем элементы массива в переменные
      extract($data);
    }
    include 'application/views/' . $template_view;
  }
}