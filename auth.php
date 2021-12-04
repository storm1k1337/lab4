<?php
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  
  $result = "$login:$pass"; //данные которые ввели

  $match = null;
  //считываем файл построчно и ищем совпадение
  //если совпадение найдено - записываем результат в $match и прекращаем сканирование файла
  $fp = fopen("pass.txt", "r+");
  while (($line = stream_get_line($fp, 1024 * 1024, "\n")) !== false) {
      if(trim($line) === trim($result)) {
          $match = trim($line);
          break;
      }
  }
  fclose($fp);
  
  if(!empty($match)) {
      echo "Вы залогинены";
  } else {
      echo "Доступ закрыт!";
  }