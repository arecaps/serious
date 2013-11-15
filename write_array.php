<?php

          $arr['first']= 'Aryeh';
          $arr['last']= 'Caplan';
          $arr['email']= 'mail@aryehcaplan.com';
 print_r($arr);

	$host ='localhost';
	$dbname='test';
	$user='root';
	$pass ='pcs12345';

		try {
		   $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		} catch (PDOexception $e){
			echo $e->getMessage();
		}
	$STH =$DBH->prepare("INSERT INTO test (f_name, l_name, email) VALUES (:first, :last, :email)");

	if ($STH->execute($arr)) {
                echo 'Successfully inserted record <br/>';

        } else {
                echo 'Failed to insert record <br/>';
	}
   
?>
