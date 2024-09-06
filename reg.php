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


    $username=$_POST['username'];
   $password=$_POST['password'];  
   $email=$_POST['email'];
   $cpassword=$_POST['cpassword'];
  
    if($password==$cpassword)
    {
    echo"<br>";

    $sql= "INSERT INTO register(username,password,email,cpassword)VALUES('$username','$password','$email','$cpassword')";
}

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