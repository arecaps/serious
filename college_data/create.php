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
$DBH->query('CREATE DATABASE project');

//$DBH->query('DROP TABLE IF EXISTS enrollment');
$DBH->query('CREATE TABLE project.enrollment11 (ID INT( 6 ) NOT NULL , Enrollment INT( 6 ) NOT NULL)');

$DBH = null;
?>
