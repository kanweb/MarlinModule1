<?php
$db = include '../database/start.php';
// выводим деталку записи
$post = $db->getOne('posts', $_GET["id"]);
?>
<h1><?= $post['title'] ?></h1>


