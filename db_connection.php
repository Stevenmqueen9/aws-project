<?php
$hostname="mysql-container";
$username="root";
$password="root";
$database="aws";

$conn=new mysqli($hostname,$username,$password,$database);

if ($conn->connect_error) {
  die("Processo fallito: " . $conn->connect_error);
} 
?>
