<?php
    header("Content-type: text/html; charset=utf-8");

    if(isset($_COOKIE['style']))
        $s = $_COOKIE['style'];
    else
        $s = 'first';
    //Если нажата кнопка Войти ...
    if(isset($_POST['submit'])){
        session_start();
        $name = $_POST['name'];
        setcookie('name', $name);
        $_SESSION['autorisation'] = true;
        if(isset($_COOKIE['lastPage']))
            header("Location: ". $_COOKIE['lastPage']);
        else
            header("Location: choose.php");
}
?>
<head>
    <link rel="stylesheet" href=<?php echo "$s.css" ?>>
</head>
<h3>Cтраница авторизации</h3>
<form action="" method="post">
    Логин: <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Войти"><br>
</form>