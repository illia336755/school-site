<?php 
//Установка локали и выбор значений даты
  setlocale(LC_ALL, "ukrainian");
  $day = strftime('%d');
  $mon = strftime('%B');
  $mon = iconv("windows-1251", "UTF-8", $mon);
  $year = strftime('%Y');
  //
  //
  $hour = (int)strftime('%H');
  $welcome = "Доброй ночи";
  if($hour>=6 and $hour<12):
    $welcome = "Доброе утро";
  elseif ($hour>=12 and $hour<18):
    $welcome = "Добрый день";
  elseif ($hour>=18 and $hour<23):
    $welcome = "Добрый вечер";
  endif;

  $leftMenu = [
    ['link' => 'Домой', 'href' => 'index.php'],
    ['link' => 'О нас', 'href' => 'about.php'],
    ['link' => 'Контакты', 'href' => 'contact.php'],
    ['link' => 'Таблица умножения', 'href' => 'table.php'],
    ['link' => 'Калькулятор', 'href' => 'calc.php'],
  ]; 

  //Инициализация заголовков страницы
  $title = 'Сайт нашей школы';
  $header = "$welcome, Гость!";
  if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
    switch($id){
      case 'about':
        $title = 'О сайте';
        $header ='О нашем сайте';
        break;
      case 'contact': 
        $title = 'Контакты';
        $header ='Обратная связь';
        break;
      case 'table': 
        $title = 'Таблица умножения';
        $header ='Таблица усножения';
        break;
      case 'calc':
        $title = 'Он-лайн калькулятор';
        $header ='Калькулятор';
        break;
    }
  }
