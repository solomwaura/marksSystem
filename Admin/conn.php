<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$dbname = "class";


$error = $msg = '';
$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn ) {
echo ("");
}
else {
    die('could not connect:');
 }

 if (isset($_POST['login'])){
    login();
 }

 if (isset($_POST['register'])){
    register();
 }

//  admin login function
function login(){

    global $conn,$error;

    $name = ($_POST['admin-name']);
    $pass = ($_POST['admin-pass']);

    $sql = "SELECT * FROM admin WHERE password='$pass'";
    
    $result = $conn->query($sql);

    if(mysqli_fetch_assoc($result) > 0){

        $_SESSION['user'] = $name;
        header('location: home.php');
    }
    else{
        $error ="Login failed no user found";

        header('location: index.php');
    }
  
}

// register teachers function

function register(){
    global $conn,$msg;

    $name = $_POST['name'];
    $class = $_POST['class'];
    $pass = $_POST['pass'];
    $code = $_POST['code'];

    $query = "INSERT INTO teachers (name,class,password,pass_code)
                VALUES('$name','$class','$pass','$code')";
    $conn->query($query);

    // if($conn->query($query) === TRUE){
    //     $msg = "Successfully added new Teacher";

    //     header('location: home.php');
    // }
    // else{

    //     $msg = "failed to register";
    //     header('location: home.php');
    // }

}
?>