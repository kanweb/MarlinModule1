<?php

class Router
{
    protected $routes;
    protected $route;

    public function __construct($routes)
    {
        $this->route = $this->getThisUrl();
        $this->routes = $routes;
    }

    //Возвращает содержимое нужной страницы
    public function renderPage()
    {
        if (array_key_exists($this->route, $this->routes)) {
            include($_SERVER["DOCUMENT_ROOT"] . $this->routes[$this->route]);
            exit();
        } else {
            dd(404);
        }
    }

    public function getThisUrl()
    {
        $route = $_SERVER['REQUEST_URI'];
        $route = explode('?', $route);
        return $route[0];
    }
}


