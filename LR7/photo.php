<?php
$name = $_GET['name'];
mysql_connect('localhost:3306', 'root', '');
mysql_select_db('php_labs');
$views_select = mysql_query("SELECT number_of_views FROM pictures WHERE file_name = '$name'");
if (!$views_select)
    echo 'False';
$views_assoc = mysql_fetch_assoc($views_select);
$views = $views_assoc['number_of_views'];
mysql_query("
    UPDATE pictures
    SET number_of_views = '$views' + 1
    WHERE file_name = '$name'
");

$views++;
?>
<head>
    <title>Просмотр картинки</title>
</head>
<body>
    <img src='img/<?php echo $name;?>' width="1000">
    <h2>Количество просмотров: <?php echo "<b>$views<b>" ?></h2>
</body>
