<?php

require_once 'core/Database.php';

$db = new Database();

$conn = $db->connect();

echo "🚀 Conexão com MySQL funcionando!";

