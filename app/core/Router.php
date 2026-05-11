<?php

class Router {

    public function route($url) {

        switch ($url) {

            case '/':
            case '':
                require_once __DIR__ . '/../controllers/HomeController.php';

                $controller = new HomeController();
                $controller->index();
                break;

            case '/sobre':
                require_once __DIR__ . '/../controllers/HomeController.php';

                $controller = new HomeController();
                $controller->sobre();
                break;

            default:
                echo "<h1>404 - Página não encontrada</h1>";
                break;
        }
    }
}