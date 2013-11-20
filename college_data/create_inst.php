<?php
$host = 'localhost';
$user = 'root';
$pass = 'pcs12345';

try {
  $DBH = new PDO("mysql:host=$host;", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}

//$DBH->query('DROP DATABASE IF EXISTS project');
//$DBH->query('CREATE DATABASE project');

$DBH->query('DROP TABLE IF EXISTS project.institutions');
$DBH->query('CREATE TABLE project.institutions (ID INT( 6 ) NOT NULL , Name VARCHAR( 100 ) NOT NULL, City VARCHAR ( 30 ) NOT NULL, State VARCHAR (2) NOT NULL, Latitude DECIMAL ( 10, 6 ) NOT NULL, Longitude DECIMAL( 10, 6 ) NOT NULL)');

$DBH = null;
?>
