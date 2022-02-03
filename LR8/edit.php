<?php
require __DIR__ . '/functions.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $new_alt = $_POST['alt'];
    $new_title = $_POST['title'];
    send_query("
        UPDATE pictures
        SET alt = '$new_alt', title = '$new_title'
        WHERE file_name = '$name'
    ");
    header("Location: http://localhost/LR8/photo.php?name=$name");
}
$name = $_GET['name'];
$image = send_query("SELECT * FROM pictures WHERE file_name = '$name'");
$views = $image[0]['number_of_views'];
$alt = $image[0]['alt'];
$title = $image[0]['title'];
?>
<html>
<head>
    <title>Редактирование</title>
</head>
<body>
<form method="post">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <p>Name: <?php echo $name; ?></p>
    <p>Alt:
        <input type="text" name="alt" value="<?php echo $alt ?>">
    </p>
    <p>Title:
        <input type="text" name="title" value="<?php echo $title; ?>">
    </p>
    <br>
    <input type="submit" name="save" value="Save changes">
</form>
</body>
</html>