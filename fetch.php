<?php

$query = "SELECT * FROM marks WHERE ID = (SELECT MAX(id)FROM marks)";

$result = $conn->query($query);

// the update code to the update page

if(isset($_POST['updating'])){
    $pid = $_POST['pid'];

    $sql = "SELECT *FROM marks WHERE id='$pid'";
    
    $results = $conn->query($sql);
}




?>