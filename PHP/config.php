<?php
/*
 * Database connect information
 */
$host = 'localhost';
$dbName = 'mydb';
$username = 'root';
$password = '';

/** Initializing database connection */
try {
    $dbCon = new PDO("mysql:host=" . $host . ";dbname=" . $dbName, $username, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}
