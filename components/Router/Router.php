<?php

class Router
{
    protected $routes; // карта путей
    protected $route; //запрашиваемый адрес страницы

    //Получаем текущий адрес страницы и получаем массив путей из config
    public function __construct($routes)
    {
        $this->route = $this->getThisUrl();
        $this->routes = $routes;
    }

    //Возвращает содержимое нужной страницы
    public function renderPage()
    {
        //Проверяем карту путей, на наличие указанного адреса и выводим страницу если она есть
        if (array_key_exists($this->route, $this->routes)) {
            include($_SERVER["DOCUMENT_ROOT"] . $this->routes[$this->route]);
            exit();
        } else {
            dd(404);
        }
    }

    // Получаем адрес страницы без GET параметров
    public function getThisUrl()
    {
        $route = $_SERVER['REQUEST_URI'];
        $route = explode('?', $route);
        return $route[0];
    }
}


