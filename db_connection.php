<?php
$hostname="localhost";
$username="root";
$password="";
$database="aws";

$conn=new mysqli($hostname,$username,$password,$database);

if ($conn->connect_error) {
  die("Processo fallito: " . $conn->connect_error);
} 
?>