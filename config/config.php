<?php
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'todo_app');
define('DB_USER', 'root');
define('DB_PASS', '');

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