<?php
$host = "localhost";
$user = "root";
$pwd = "localhost";
$dbname = "university";
$port = 3306;

$con = new mysqli($host, $user, $pwd, $dbname, $port);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>