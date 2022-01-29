<?php
mysql_connect('localhost:3306', 'root', '');
mysql_select_db('php_labs');

$result = mysql_query("SELECT * FROM pictures");
$pictures = array();
while($row = mysql_fetch_assoc($result))
    $pictures[] = $row;
usort($pictures, "custom_sort");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="windows-1250">
    <title>Загрузка файла в БД</title>
</head>
<body>
<h1>Пример загрузки файла в БД</h1>
<?php
if (isset($_FILES['file']) and strpos($_FILES['file']['name'], '.jpg')) {
    upload_file($_FILES['file']);
    $result = mysql_query("SELECT * FROM pictures");
    $pictures = array();
    while ($row = mysql_fetch_assoc($result))
        $pictures[] = $row;
    usort($pictures, "custom_sort");
}
?>
<form method="post" enctype="multipart/form-data"> <input type="file" name="file" />
    <input type="submit" value="Загрузить файл!" />
</form>
</body>
</html>
<?php
foreach ($pictures as $picture) {
    $name = $picture['file_name'];
    echo "<a href='http://localhost/LR7/photo.php?name=$name' target='_blank'>
            <img src='img/$name' style='width: 300px; margin: 5px' alt='$name'>
          </a>";
}

?>
<?php
function upload_file($file) {
    $name = $file["name"];
    if ($name == '') {
        echo 'Файл не выбран!<br>';
        return;
    }
    if(copy($file['tmp_name'], 'img/'.$name)) {
        echo 'Файл успешно загружен<br>';
        mysql_query("INSERT INTO pictures VALUES ('$name', 0) ");
    }
    else
        echo 'Ошибка загрузки файла<br>';
}

function custom_sort($a, $b) {
    return $a['number_of_views'] < $b['number_of_views'];
}
?>