<?php
    require_once(__DIR__ . "/database.php");
    session_start();
    
    $path = "/to-do-login/";
    
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "tasks";
    
    if(!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
    
    