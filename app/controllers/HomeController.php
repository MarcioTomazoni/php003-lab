<?php

class HomeController {

    public function index() {
        require_once __DIR__ . '/../views/home.php';
    }

    public function sobre() {
        require_once __DIR__ . '/../views/sobre.php';
    }

    public function contato() {
    require_once __DIR__ . '/../views/contato.php';
    }
}