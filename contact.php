<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Область основного контента -->
    <?php 
      $size = ini_get("post_max_size"); //8
      $letter = $size{strlen($size)-1}; //M
      $size = (int)$size;
      switch(strtoupper($letter)):
        case 'G' : $size *= 1024;
        case 'M' : $size *= 1024;
        case 'K' : $size *= 1024;
      endswitch;
    ?>
    <h3>Адрес</h3>
    <p>123456 Москва, Малый Американский переулок 21</p>
    <h3>Задайте вопрос</h3>
    <form action='' method='post'>
      <label>Тема письма: </label>
      <br />
      <input name='subject' type='text' size="50" />
      <br />
      <label>Содержание: </label>
      <br />
      <textarea name='body' cols="50" rows="10"></textarea>
      <br />
      <br />
      <input type='submit' value='Отправить' />
    </form>
    <p>Максимальный размер отправляемых данных <?= $size?></p>
    <!-- Область основного контента -->
  </div>
</body>

</html>