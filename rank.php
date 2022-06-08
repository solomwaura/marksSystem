<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";



$conn = mysqli_connect($server,$username,$password,$dbname);


$query = "SELECT * FROM marks ORDER BY total DESC";

$result = $conn->query($query);

$average = "SELECT AVG(total) FROM marks";





?>