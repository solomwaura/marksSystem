<?php
session_start();

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
    die('could not connect:');
 }


$mErr = $sErr = $eErr = $tsErr = $ssErr = $nErr = "";
if(isset($_POST['submit'])){
   
    $name = $_POST['name'];
    $class = $_SESSION['class'];
    $math = $_POST['math'];
    $english = $_POST['english'];
    $science = $_POST['science'];
    $tscience = $_POST['tscience'];
    $sstudies = $_POST['sstudies'];

    $totals =$math+$english+$science+$tscience+$sstudies;
    

    if(ctype_digit($name)){
        $nErr = "Invalid name";
    }
    
    if(strlen("$math") > 3) {
        $mErr = "too much digits";
    }
    if(strlen("$english") > 3) {
        $eErr = "too much digits";
    }
    if(strlen("$science") > 3) {
        $sErr = "too much digits";
    }
    if(strlen("$tscience") > 3) {
        $tsErr = "too much digits";
    }
    if(strlen("$sstudies") > 3) {
        $ssErr = "too much digits";
    }

    else{

        $sql = "INSERT INTO marks (name,class,math,english,science,t_science,s_science,total)
            VALUES('$name','$class','$math','$english','$science','$tscience','$sstudies','$totals')";
   
    if($conn->query($sql) === TRUE) {
       header('location: results.php');
       
    }
    else {
       header('location: dashboard.php');
    }

    }
   


    
}

?>
