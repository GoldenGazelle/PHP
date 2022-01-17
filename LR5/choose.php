<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();
    //Запись в cookie адреса страницы
    $lastPage = $_SERVER['REQUEST_URI'];
    setcookie('lastPage', $lastPage);

    if(isset($_COOKIE['style']))
        $s = $_COOKIE['style'];
    else
        $s = 'first';

    //Если сессия создана, то поприветствовать пользователя
    if(!empty($_SESSION['autorisation']) and $_SESSION['autorisation'])
        echo "Добро пожаловать, ". $_COOKIE['name'] .". Вы авторизованы. <br>";
    else
        header("Location: autorisation.php");
?>
<head>
    <link rel="stylesheet" href=<?php echo "$s.css" ?>>
</head>
<h2>CHOOSE</h2>
На страницу  <a href="A.php"><"A.php"></a><br><br>
На страницу <a href="B.php"><"B.php"></a><br><br>
