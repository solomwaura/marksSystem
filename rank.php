<?php

$query = "SELECT * FROM marks ORDER BY total DESC";

$result = $conn->query($query);

$average = "SELECT AVG(total) FROM marks";





?>