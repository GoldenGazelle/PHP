<?php
require __DIR__ . '/functions.php';
if (isset($_FILES['file']) and strpos($_FILES['file']['name'], '.jpg')) {
    upload_file($_FILES['file']);
}
$images = get_images();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Загрузка файла в БД</title>
</head>
<body>
<h1>Пример загрузки файла в БД</h1>
<form method="post" enctype="multipart/form-data"> <input type="file" name="file" />
    <input type="submit" value="Загрузить файл!" />
</form>
<?php show_images($images); ?>
</body>
</html>
