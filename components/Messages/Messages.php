<?php
// Класс формирует и выводит сообщение пользователю
class Messages
{
    const SUCCESS = "alert-success";
    const ERROR = "alert-danger";

    // Добавляем сообщение в сессию
    public static function add($text, $type)
    {
        $_SESSION["message"] = [
            "text" => $text,
            "type" => $type
        ];
    }

    // Получаем сообщение из сессии
    public static function get()
    {
        $message = $_SESSION["message"];
        unset($_SESSION["message"]);
        return $message;
    }

}


