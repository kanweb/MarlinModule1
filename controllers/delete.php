<?php
$db = include '../database/start.php';

$validator = new Validator([
    'id' => 'int',
]);

if ($validator->validate) {
    $post = $db->delete('posts', $_GET["id"]);
    Messages::add("Запись успешно удалена!", Messages::SUCCESS);
    header('Location: /');
} else {
    Messages::add("Ошибка удаления записи!", Messages::ERROR);
}



?>