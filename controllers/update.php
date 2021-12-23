<?php
$db = include '../database/start.php';

$validator = new Validator([
    'id' => 'int',
    'title' => 'string'
]);
// Обновляем запись
if ($validator->validate) {
    $db->update('posts', [
        'title' => $_POST["title"],
    ], $_GET["id"]);
    Messages::add("Запись успешно обновлена!", Messages::SUCCESS);
    header('Location: /');
} else {
    Messages::add("Ошибка обновления записи!", Messages::ERROR);
}
