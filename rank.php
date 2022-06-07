<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";



$conn = mysqli_connect($server,$username,$password,$dbname);


$query = "SELECT * FROM marks";

$result = $conn->query($query);



?>