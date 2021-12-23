<?php
$db = include '../database/start.php';

// проверяем поле типа строка
$validator = new Validator([
    'title' => 'string'
]);
// Добавляем запись
if ($validator->validate) {
    $db->create('posts', [
        'title' => $_POST['title'],
    ]);
    Messages::add("Запись успешно добавлена!", Messages::SUCCESS);
    header('Location: /');
} else {
    Messages::add("Ошибка добавления записи!", Messages::ERROR);
}







