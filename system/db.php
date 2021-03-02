<?php

$host = 'localhost';
$db = 'nematgha_developer01';
$user = 'nematgha';
$pass = 'l7bjJ06Gd5';
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES      => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass, $options);

?>