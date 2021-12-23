<?php
return [
    'database' => [
        'connection' => 'mysql:host=localhost',
        'database' => 'saitogram_marl2',
        'username' => 'saitogram_marl2',
        'password' => 'G9cJxvNc',
        'charset' => 'utf8'
    ],
    'routes' => [
        "/" => "/controllers/homepage.php",
        "/about" => "/controllers/about.php",
        "/create" => "/controllers/create.php",
        "/store" => "/controllers/store.php",
        "/edit" => "/controllers/edit.php",
        "/delete" => "/controllers/delete.php",
        "/update" => "/controllers/update.php",
        "/show" => "/controllers/show.php",
    ]
];
