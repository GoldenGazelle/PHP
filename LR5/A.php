<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();
    //Запись в cookie адреса страницы, то же самое для страницы b.php с таким же именем
    $lastPage = $_SERVER['REQUEST_URI'];
    setcookie('lastPage', $lastPage);

    if(isset($_COOKIE['style']))
        $s = $_COOKIE['style'];
    else
        $s = 'first';

    //Если сессия создана, то поприветствовать пользователя
    if(!empty($_SESSION['autorisation']) and $_SESSION['autorisation']){
        echo "Добро пожаловать, ". $_COOKIE['name'] .". Вы авторизованы. <br>";
        if(isset($_POST['submit'])){
            unset($_SESSION['autorisation']);
            setcookie('lastPage', null);
            session_destroy();
            header("Location: autorisation.php");
        }
    }
    else
        header("Location: autorisation.php");
?>
<head>
    <link rel="stylesheet" href=<?php echo "$s.css" ?>>
</head>
<h2>A</h2>
На страницу  <a href="index.php"><"index.php"></a><br><br>
На страницу <a href="B.php"><"b.php"></a><br><br>
<a href="setting.php">Настройки</a><br><br>
<form action="" method="post">
    <input name="submit" type="submit" value="Выйти">
</form>
