<?php
header("Content-type: text/html; charset=utf-8");
//Если нажата кнопка Войти ...
if(isset($_POST['submit'])){
        session_start();
        $name = $_POST['name'];
        setcookie('name', $name);
        $_SESSION['autorisation'] = true;
        header("Location: ". $_COOKIE['lastPage']);
}
?>
<h3>Cтраница авторизации</h3>
<form action="" method="post">
    Логин: <input type="text" name="name"><br>
    <input type="submit" name="submit" value="Войти"><br>
</form>