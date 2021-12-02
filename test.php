<?php
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  if (($login == "admin") && ($pass == "admin"))
    echo "Вы залогинены";
  else echo "Доступ закрыт";
?>