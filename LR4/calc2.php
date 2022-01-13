<?PHP
$calc = "";
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST["calculator"])) {
    echo $_POST["calc"];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $calc = $_POST["calc"];
    if($calc == "+")
        $result = $a + $b;
    if($calc == "-")
        $result = $a - $b;
    if($calc == "*")
        $result = $a * $b;
    if($calc == "/") {
        if($b !== '0') {
            $result = $a / $b;
        }
        else {
            $result = "Деление на ноль";
        }
    }
}
else $result = "";
?>
<html>
<head>
    <meta charset="utf-8">
</head>

<body>
<form method="post">
    <input type="text" name="a"/>
    <span id = "op"><?php echo $calc;?></span>
    <input type="text" name="b"/>
    <input type="submit" value="="/>
    <?php echo $result; ?>
    <br>
    <input name="calculator" value="+" onclick="<?php $calc="+";?>" type="button"/>
    <input name="calculator" value="-" type="button"/>
    <input name="calculator" value="*" type="button"/>
    <input name="calculator" value="/" type="button"/>


</form>
</body>
</html>
