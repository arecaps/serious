<?php
 	$host ='localhost';
        $dbname='project';
        $user='root';
        $pass ='pcs12345';
        
                try {
                 $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                } catch (PDOexception $e){
                        echo $e->getMessage();
                                }
