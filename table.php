<?php
$host = 'localhost';
$user = 'root';
$dbname = 'institutions';
$pass = 'pcs12345';

try {
  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}

$DBH->query('DROP TABLE IF EXISTS institutions');
$DBH->query('CREATE TABLE institutions (ID INT( 6 ) NOT NULL , Name VARCHAR( 120 ) NOT NULL , Address VARCHAR( 100 ) NOT NULL , City VARCHAR( 30 ) NOT NULL , State VARCHAR( 2 ) NOT NULL , Zip INT ( 10 ) NOT NULL , Website VARCHAR( 100 ) NOT NULL , Highest_Degree_Offered VARCHAR( 100 ) NOT NULL , Latitude DECIMAL( 10, 6 ) NOT NULL , Longitude DECIMAL( 10, 6 ) NOT NULL)');

$DBH = null;
?>
