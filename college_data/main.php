<?php
include_once('pdo_connect.php');

    $sql = ($_POST[query]);


        $STH =$DBH->prepare($sql);
            $STH->setFetchMode(PDO::FETCH_ASSOC);
            
//              print_r($STH);
            
            $STH->execute();
                    $data = $STH->fetchall();

                   include_once ('table.php');