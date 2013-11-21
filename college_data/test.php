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
                                
        $rowcount = 0;
        
        
        @$handle = fopen("effy2011.csv", "r");
                        while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
                                if($rowcount ==0){
                                        $rowcount++;
                                        continue;
//				} elseif ($rowcount==30){
//					   break; 
		                }else{ 
                                    $rows[] = $data;
				} 
        $row = $rows[0];
        unset ($rows);

			$array['ID'] = $row[0];
			$array['Enrollment'] = $row[4];

             $STH =$DBH->prepare("INSERT INTO enrollment (ID, Enrollment) VALUES (:ID, :Enrollment)");

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
