<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "web4a";
$dsn = "mysql:host={$server};dbname={$db}";

try {
    $koneksi = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
}
