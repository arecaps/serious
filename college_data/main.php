<!DOCTYPEhtml>
<?php
include_once('pdo_connect.php');

    $STH =$DBH->prepare("SELECT enrollment.ID, Name, Enrollment FROM enrollment 
			INNER JOIN institutions ON enrollment.ID = institutions.ID 
			ORDER BY Enrollment DESC LIMIT 10;");
	$STH->setFetchMode(PDO::FETCH_ASSOC);
	$STH->execute();
		$data = $STH->fetchall();
                print_r($data);			
  	echo "<table border=1><thead><tr>";
  			
            foreach($data[0] as $key=> $value){
  		echo "<th>" . $key . "</th>";
            }
  			
        echo "</tr></thead><tbody>";
            foreach ($data as $outer =>$inner) {  
                echo '<tr>';
                   foreach($inner as $key => $value){
                      echo "<th>" . $value . "</th>";  
                   }
                 echo '</tr>';  
            }
	echo "</tbody></table></body>";
?>