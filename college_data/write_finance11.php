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
	$handle = fopen("f1011_f1a.csv", "r");
			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
				if($rowcount ==0){
					$rowcount++;
					continue; //prevents column headers from being written to database
				}  else{
					$rows[] = $data;        
				}
	
	$row = $rows[0]; 
	unset ($rows);
		
		//create the associative array with key names to match table names
		$array['ID'] = $row[0];
		$array['Assets'] = $row[10];
		$array['Liabilities'] = $row[24];
                $array['Revenue'] = $row[110];
		
		
	print_r($array);
	echo '<br>';
			
		$STH =$DBH->prepare("INSERT INTO financial11 (ID, Assets, Liabilities, Revenue) VALUES (:ID, :Assets, :Liabilities, :Revenue)");

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
