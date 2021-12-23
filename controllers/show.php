<?php
$db = include '../database/start.php';

$post = $db->getOne('posts', $_GET["id"]);
?>
<h1><?= $post['title'] ?></h1>


