<?
session_start();
include '../functions.php';
$config = include '../config.php';
include '../components/init.php';

$router = new Router($config['routes']);
$router->renderPage();







