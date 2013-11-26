<!DOCTYPEhtml>
<?php
include_once('pdo_connect.php');

    $STH =$DBH->prepare("SELECT enrollment.ID, Name, Enrollment FROM enrollment 
			INNER JOIN institutions ON enrollment.ID = institutions.ID 
			ORDER BY Enrollment DESC LIMIT 10;");
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	$STH->execute();
		$data = $STH->fetchall();		
  
               include_once ('table.php');
?>