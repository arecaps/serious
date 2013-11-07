<?php
$host = 'localhost';
$dbname = 'employees';
$user = 'root';
$pass = 'pcs12345';

try {
  $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

} catch (PDOException $e) {

echo $e->getMessage();
}

$STH = $DBH->query('SELECT * FROM employees LIMIT 10');
$STH->setFetchMode(PDO::FETCH_ASSOC);

while($row = $STH->fetch()) {
  foreach($row as $key => $value) {
    echo $key . ': ' . $value . '<br>';
  }
  echo '<hr>';
}

?>
