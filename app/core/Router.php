<?php

class Router {

    private $routes = [

        '/' => [
            'controller' => 'HomeController',
            'method' => 'index'
        ],

        '/sobre' => [
            'controller' => 'HomeController',
            'method' => 'sobre'
        ],

        '/contato' => [
            'controller' => 'HomeController',
            'method' => 'contato'
        ]

    ];

    public function route($url) {

        if (array_key_exists($url, $this->routes)) {

            $controllerName = $this->routes[$url]['controller'];
            $method = $this->routes[$url]['method'];

            require_once __DIR__ . '/../controllers/' . $controllerName . '.php';

            $controller = new $controllerName();
            $controller->$method();

        } else {

            echo "<h1>404 - Página não encontrada</h1>";

        }
    }
}