<?php
$db = include $_SERVER["DOCUMENT_ROOT"].'/database/start.php';
$posts = $db->getAll('posts');

include($_SERVER["DOCUMENT_ROOT"].'/index.view.php');