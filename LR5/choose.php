<?php
header("Content-type: text/html; charset=utf-8");
session_start();
//Запись в cookie адреса страницы, то же самое для страницы b.php с таким же именем
$lastPage = $_SERVER['REQUEST_URI'];
setcookie('lastPage', $lastPage);
//Если сессия создана, то поприветствовать пользователя и подключить файл logaut.php с кнопкой Выйти
if(!empty($_SESSION['autorisation']) and $_SESSION['autorisation'])
    echo "Добро пожаловать, ". $_COOKIE['name'] .". Вы авторизованы. <br>";
else
    header("Location: autorisation.php");
?>
<h2>CHOOSE</h2>
На страницу  <a href="A.php"><"A.php"></a><br><br>
На страницу <a href="B.php"><"B.php"></a><br><br>