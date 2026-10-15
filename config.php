<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "grocerylist";
$connect = new mysqli($host, $user, $password, $db);

if($connect->connect_error){
  echo "Failed to connect to the database" . $connect->connect_error;
}
?>