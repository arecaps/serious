<?php
include_once ('pdo_connect.php');

	class read_csv{
	
		public $filename;
		
		function __construct($filename){
		
			$this->filename=$filename;
		
			$rowcount = 0;
				@$handle = fopen("{$filename}.csv", "r");
					while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
						if($rowcount ==0){
							$rowcount++;
							continue; //prevents column headers from being written to database
						} else {
							$rows[] = $data;        
						}
	
	$row = $rows[0]; 
	unset ($rows);
				}
print_r($row);
		}
	}

$money = new read_csv('f1011_f1a');
?>
