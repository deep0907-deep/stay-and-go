<?php

$server="localhost";
$username="root";
$password="";

$connection=mysqli_connect($server,$username,$password,"stay_n_go");

if(!$connection)
{
    die("Connection failed due to".mysqli_connect_error());
}

echo "Connected Successfully";

    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from register where username='".$uname."'AND password='".$password."' limit 1";

    
$query=mysqli_query($connection,$sql);
if($query)
{
    header("Location: /stay_n_go/index.php");
    exit(); // Ensure the script stops executing after redirection
}
else
{
    echo"<br> Error:";
}
?>
