<?php
$db = include '../database/start.php';


$validator = new Validator([
    'title' => 'string'
]);

if ($validator->validate) {
    $db->create('posts', [
        'title' => $_POST['title'],
    ]);
    Messages::add("Запись успешно добавлена!", Messages::SUCCESS);
    header('Location: /');
} else {
    Messages::add("Ошибка добавления записи!", Messages::ERROR);
}







