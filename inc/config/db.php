<?php

$host = 'mysql-76575-0.cloudclusters.net';
$db   = 'shop_inventory';
$user = 'admin';
$pass = 'jIvoJ9hR';
$port = "10738";
$charset = 'utf8mb4';

$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";

?>
