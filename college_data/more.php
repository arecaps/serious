<?php
include_once('pdo_connect.php');
//print_r($_POST);
    $school = ($_POST[school]);



        $STH =$DBH->prepare("SELECT * FROM institutions LEFT JOIN enrollment11 ON institutions.ID = enrollment11.ID "
                . "LEFT JOIN financial11 ON institutions.ID = financial11.ID WHERE Name = '$school' ");
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            
       //      print_r($STH);
            
            $STH->execute();
                    $data = $STH->fetchall();

                   include_once ('table.php');



