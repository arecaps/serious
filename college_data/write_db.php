<?php
	//sets the variables for the PDO
	$host ='localhost';
	$dbname='project';
	$user='root';
	$pass ='pcs12345';
	
		//make the PDO connection
		try {
		   $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		} catch (PDOexception $e){
			echo $e->getMessage();
				}

	$rowcount = 0;
	@$handle = fopen("effy2011.csv", "r");
			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
				if($rowcount ==0){
					$rowcount++;
					continue; //prevents column headers from being written to database
			//	} elseif ($rowcount==5){
			//		break;
				} else {
					$rows[] = $data;        
				}
	
	$row = $rows[0]; 
//	print_r($rows);
//	echo '<br>' . '<br>';
//	print_r($row);
//	 echo '<br>' . '<br>';
	unset ($rows);
		
		//create the associative array with key names to match table names
		$array['ID'] = $row[0];
		$array['Enrollment'] = $row[4];
		
		
	print_r($array);
	echo '<br>';
			
		$STH =$DBH->prepare("INSERT INTO enrollment11 (ID, Enrollment) VALUES (:ID, :Enrollment)");

			if ($STH->execute($array)) {
						echo "Successfully inserted record # $rowcount . <br/>";

				} else {
						echo 'Failed to insert record <br/>';
			}        

		unset($row);
		unset($array);
		$rowcount++;  
	}
		fclose($handle);
?>

