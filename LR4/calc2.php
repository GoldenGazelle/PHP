<?PHP
$result = '';
$a = isset($_POST['a']) ? $_POST['a'] : '';
$b = isset($_POST['b']) ? $_POST['b'] : '';
$calc = isset($_POST['calc']) ? $_POST['calc'] : '';
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
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <input type="text" name="a" value="<?php echo $a ?>"/>
    <span id = "op"><?php echo $calc; ?></span>
    <input type="text" name="b" value="<?php echo $b ?>"/>
    =
    <?php echo "<b>$result<b>"; ?>
    <br>
    <button name="calc" value="+">+</button>
    <button name="calc" value="-">-</button>
    <button name="calc" value="*">*</button>
    <button name="calc" value="/">/</button>


</form>
</body>
</html>