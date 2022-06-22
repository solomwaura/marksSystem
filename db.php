<?php 

$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";



$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn ) {
echo ("");
}
else {
    die('could not connect:');
 }

?>