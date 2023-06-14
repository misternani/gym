<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';

$username = $_POST['username'];
$password = $_POST['password'];


$result = mysqli_query($con, "SELECT username FROM admin WHERE username = '$username' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    

    $_SESSION["username"] = $username;
   header("location:btransformations.php");
} 
else
{

    
    echo "login failed";
}
    


?>