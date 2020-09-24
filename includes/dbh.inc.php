<?php

$dbHost = 'localhost';
$dbName = 'cc6-pj1';
$dbUser = 'midwayjona';
$dbPassword = '';

// Set DSN (datasource name)
$dbDSN = 'pgsql:host='.$dbHost.';dbname='.$dbName;

// PDO Instance
try {
  $conn = new PDO($dbDSN, $dbUser, $dbPassword);
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
  echo $e->getMessage();
}
