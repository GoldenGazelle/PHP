<?php
require __DIR__ . '/functions.php';
$name = $_GET['name'];
$image = send_query("SELECT * FROM pictures WHERE file_name = '$name'");
$views = $image[0]['number_of_views'];
$alt = $image[0]['alt'];
$title = $image[0]['title'];
send_query("
    UPDATE pictures
    SET number_of_views = '$views' + 1
    WHERE file_name = '$name'
");
$views++;
?>
<html>
<head>
    <title>Просмотр картинки</title>
</head>
<body>
    <img src='img/<?= $name;?>' width="1000" alt="<?= $alt;?>" title="<?= $title;?>">
    <h2>Количество просмотров: <?php echo "<b>$views<b>" ?></h2>
    <p>
        <a href="http://localhost/LR8/edit.php?name=<?php echo $name ?>">Редактировать</a>
    </p>
</body>
</html>