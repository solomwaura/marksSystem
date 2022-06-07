<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";



$conn = mysqli_connect($server,$username,$password,$dbname);


$query = "SELECT * FROM marks WHERE ID = (SELECT MAX(id)FROM marks)";

$result = $conn->query($query);

// the update code to the update page

if($_SERVER['REQUEST_METHOD']=='POST'){
    $pid = $_POST['pid'];

    $sql = "SELECT *FROM marks WHERE id='$pid'";
    $results = $conn->query($sql);
}




?>