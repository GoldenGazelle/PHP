<?php
    header("Content-type: text/html; charset=utf-8");
    session_start();
    //Если сессия создана, то поприветствовать пользователя
    if(!empty($_SESSION['autorisation']) and $_SESSION['autorisation']){
        if(isset($_POST['submit'])) {
            $s = $_POST['style'];
            setcookie('style', $s);
        }
        elseif (isset($_COOKIE['style']))
            $s = $_COOKIE['style'];
        else
            $s = 'first';
    }
    else
        header("Location: autorisation.php");

?>
<head>
    <link rel="stylesheet" href="<?php echo "$s.css"; ?>">
</head>
<h3>Выбор оформления</h3>
<form action="" method="post">
    <p><input name="style" type="radio" value="first"> Первое</p>
    <p><input name="style" type="radio" value="second"> Второе</p>
    <p><input name="style" type="radio" value="third" > Третье</p>
    <p><input name="submit" type="submit" value="Выбрать"></p>
</form>
На страницу <a href="A.php"><"A.php"></a><br><br>
На страницу <a href="B.php"><"B.php"></a><br><br>
