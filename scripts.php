<?php

session_start();


 
if(isset($_POST['login'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $lsql = "SELECT * FROM teachers WHERE name=.addslashes['$username']";

    $_SESSION['user'] = $username;

}
?>