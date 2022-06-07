<?php


$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";



$conn = mysqli_connect($server,$username,$password,$dbname);
$mathErrr = "";
if($conn ) {
echo ("");
}
else {
    die('could not connect:' . mysql_error());
}


// the update code to the update page

if($_SERVER['REQUEST_METHOD']=='POST'){
    $pid = $_POST['pid'];

    $sql = "SELECT *FROM marks WHERE id='$pid'";
    $results = $conn->query($sql);
}



//update code to the database

if(isset($_POST['updating'])){
    $id = $_POST['pid'];
    $stud = $_POST['name'];
    $mth = $_POST['math'];
    $eng = $_POST['english'];
    $sci = $_POST['science'];
    $technology = $_POST['tscience'];
    $studies = $_POST['sstudies'];

    $update = "UPDATE marks SET name='$stud',math='$mth',english='$eng',science='$sci',
    t_science='$technology',s_studies='$studies' WHERE id='$id'";

    if($conn->query($update) === TRUE) {
        header('location: results.php');
    }
    else{
        header('location: update.php');
    }
}



?>