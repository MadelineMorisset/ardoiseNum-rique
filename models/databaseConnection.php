<?php
$host = 'localhost';
$dbname = 'ardoise_numerique';
$username = 'root';
$password = '';

try {
    $mysqlClient = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
?>