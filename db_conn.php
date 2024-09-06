<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "stay_n_go";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($conn) {
    echo " Done";
}else{
    echo "Error";
}
?>
