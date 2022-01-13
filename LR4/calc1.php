<?PHP
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST["calculator"])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $calc = $_POST["calculator"];
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
    <select name="calculator">
        <option selected value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="b"/>
    <input type="submit" value="="/>
    <?php echo $result; ?>
</form>
</body>
</html>
