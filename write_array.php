<?php
	//sets the variables for the PDO
	$host ='localhost';
	$dbname='institutions';
	$user='root';
	$pass ='pcs12345';
	
		//make the PDO connection
		try {
		   $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
		} catch (PDOexception $e){
			echo $e->getMessage();
				}
				
	$rowcount = 0;
	@$handle = fopen("SampleDB.csv", "r");
			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
				if($rowcount ==0){
					$rowcount++;
					continue; //prevents column headers from being written to database
				} else {
				$rows[] = $data;        
				}
	
	$row = $rows[0]; 
	unset ($rows);
		
		//create the associative array with key names to match table names
		$array['ID'] = $row[0];
		$array['Name'] = $row[1];
		$array['Address'] = $row[2];
		$array['City'] = $row[3];
		$array['State'] = $row[4];
		$array['Zip'] = $row[5];
		$array['Website'] = $row[6];
		$array['Highest_Degree_Offered'] = $row[7];
		$array['Latitude'] = $row[8];
		$array['Longitude'] = $row[9];
		
	//print_r($array);
	//echo '<br>';
			
			$STH =$DBH->prepare("INSERT INTO institutions (ID, Name, Address, City, State, Zip, Website, Highest_Degree_Offered, Latitude, Longitude) VALUES (:ID, :Name, :Address, :City, :State, :Zip, :Website, :Highest_Degree_Offered, :Latitude, :Longitude)");

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
