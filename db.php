<?php
$host = "sql311.epizy.com";
$user = "epiz_31625976";
$pwd = "3HkkVcxUzjVbP";
$dbname = "epiz_31625976_university";
$port = 3306;

$con = new mysqli($host, $user, $pwd, $dbname, $port);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }

session_start();
?>