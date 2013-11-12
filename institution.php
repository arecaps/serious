<?php
$host = 'localhost';
$user = 'root';
$pass = 'pcs12345';

try {
  $DBH = new PDO("mysql:host=$host;", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}

$DBH->query('DROP DATABASE IF EXISTS institutions');
$DBH->query('CREATE DATABASE institutions');

$DBH = null;
?>
