<?php
send_query("CREATE TABLE IF NOT EXISTS pictures (
    file_name VARCHAR(100) PRIMARY KEY,
    number_of_views INT,
    title VARCHAR(100),
    alt VARCHAR(100)
)");

if (!file_exists('img/'))
    mkdir('img/');

function send_query($query) {
    mysql_connect('localhost:3306', 'root', '');
    mysql_select_db('php_labs');
    $result = mysql_query($query);
    if (gettype($result) == 'boolean') {
        return NULL;
    }
    if (mysql_num_rows($result) != 0) {
        $rows = array();
        while($row = mysql_fetch_assoc($result))
            $rows[] = $row;
        return $rows;
    }
    else
        return;
}

function get_images() {
    $pictures = send_query("SELECT * FROM pictures");
    if ($pictures) {
        usort($pictures, "custom_sort");
        return $pictures;
    }
    else return NULL;
}

function show_images($images) {
    foreach ($images as $image) {
        $name = $image['file_name'];
        $title = $image['title'];
        $alt = $image['alt'];
        echo "<a href='http://localhost/LR8/photo.php?name=$name' target='_blank'>
            <img src='img/$name' style='width: 300px; margin: 5px' alt='$alt' title='$title'>
          </a>";
    }
}

function upload_file($file) {
    $name = $file["name"];
    if ($name == '') {
        echo 'Файл не выбран!<br>';
        return;
    }
    if(copy($file['tmp_name'], 'img/'.$name)) {
        echo 'Файл успешно загружен<br>';
        send_query("INSERT INTO pictures VALUES ('$name', 0, '', '') ");
    }
    else
        echo 'Ошибка загрузки файла<br>';
}

function custom_sort($a, $b) {
    return $a['number_of_views'] < $b['number_of_views'];
}