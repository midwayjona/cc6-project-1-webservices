
<?php
try {
  $conn = new PDO('pgsql:host=localhost;dbname=cc6-pj1', 'midwayjona', 'helloholA1');
  echo "Connected to PostgreSQL with PDO";
} catch (PDOException $e) {
  echo $e->getMessage();
}
 ?>
