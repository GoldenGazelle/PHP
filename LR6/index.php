<?php
function upload_file($file) {
    if ($file['name'] == '') {
        echo 'Файл не выбран!<br>';
        return;
    }
    if(copy($file['tmp_name'], 'img/'.$file['name']))
        echo 'Файл успешно загружен<br>';
    else
        echo 'Ошибка загрузки файла<br>';
}

if (!file_exists('img/'))
    mkdir('img/')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="cp1251"/>
    <title>Загрузка файла на сервер</title>
</head>
<body>
<h1>Пример загрузки файла на сервер</h1>
<?php
if (isset($_FILES['file']) and str_ends_with($_FILES['file']['name'], '.jpg'))
    upload_file($_FILES['file']);
?>
<form method="post" enctype="multipart/form-data"> <input type="file" name="file" />
    <input type="submit" value="Загрузить файл!" />
</form>
</body>
</html>
<?php
foreach (scandir('img/') as $file) {
    if ($file !== '.' and $file !== '..') {
        echo "<a href='img/$file' target='_blank'><img src='img/$file' style='width: 300px; margin: 5px'></a>";
    }
}
?>