<?php
include_once('pdo_connect.php');
//print_r($_POST);
    $state = ($_POST[state]);



        $STH =$DBH->prepare("SELECT Name, City, State FROM institutions WHERE State = '$state' ORDER BY City");
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            
//              print_r($STH);
            
            $STH->execute();
                    $data = $STH->fetchall();

                   include_once ('table.php');

