<?php 

/**
 * connect():PDO
 * Crée une connexion à la BDD
 */

 function connect() {

    $dsn = 'mysql:dbname=classicmodels;host=127.0.0.1';
    $user = 'root';
    $password = 'root';

    $database = new PDO($dsn, $user, $password);
    
    return $database;
 }

?>