<?php 

define('DB_HOST', '127.0.0.1'); 
define('DB_NAME', 'todo');
define('DB_USER', 'root');
define('DB_PASS', 'root');

function connect_db() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}


?>