<?php
include_once('pdo_connect.php');

$STH = $DBH->prepare("SELECT * FROM project.institutions LIMIT 10");
$STH->execute();
$STH->setFetchMode(PDO::FETCH_ASSOC);
$result = $STH->fetchAll();
print_r($result);
?>
