<?php
include_once('pdo_connect.php');

//$DBH->query('DROP DATABASE IF EXISTS project');
//$DBH->query('CREATE DATABASE project');

//$DBH->query('DROP TABLE IF EXISTS project.institutions');
$DBH->query('CREATE TABLE project.institutions (ID INT( 6 ) NOT NULL , Name VARCHAR( 100 ) NOT NULL, City VARCHAR ( 30 ) NOT NULL, State VARCHAR (2) NOT NULL, Latitude DECIMAL ( 10, 6 ) NOT NULL, Longitude DECIMAL( 10, 6 ) NOT NULL)');

//$DBH->query('DROP TABLE IF EXISTS project.enrollment10');
$DBH->query('CREATE TABLE project.enrollment10 (ID INT( 6 ) NOT NULL PRIMARY KEY, Enrollment INT( 6 ) NOT NULL)');

//$DBH->query('DROP TABLE IF EXISTS project.enrollment11');
$DBH->query('CREATE TABLE project.enrollment11 (ID INT( 6 ) NOT NULL PRIMARY KEY, Enrollment INT( 6 ) NOT NULL)');

$DBH->query('DROP TABLE IF EXISTS project.financial11');
$DBH->query('CREATE TABLE project.financial11 (ID INT( 6 ) NOT NULL PRIMARY KEY, Assets BIGINT( 12 ) NOT NULL, Liabilities BIGINT ( 12 ) NOT NULL )');

$DBH->query('DROP TABLE IF EXISTS project.financial10');
$DBH->query('CREATE TABLE project.financial10 (ID INT( 6 ) NOT NULL PRIMARY KEY, Assets BIGINT( 12 ) NOT NULL, Liabilities BIGINT ( 12 ) NOT NULL )');

$DBH = null;
?>
