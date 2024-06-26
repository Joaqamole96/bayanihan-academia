<?php
    $host = 'localhost';
    $dbname = 'bynha';
    $username = 'root';
    $password = '';
    $attributes = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    );

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password, $attributes);
    } catch (PDOException $e) {
        error_log("Connection failed: " . $e->getMessage());
        exit("Database connection failed.");
    }
?>