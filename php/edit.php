<?php

session_start();
require_once("connect.php");


if (isset($_POST['update'])) 
{
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $username = $_POST['username'];

    $password = $_POST['password'];
        
    $updateqry = mysqli_query($conn,"update  register set f_name='$f_name', l_name='$l_name', email='$email',
    phone_number='$phone_number', `address`='$address', username='$username', `password`='$password' 
    where username='$username'");

      
	
        echo"Edit successful";
        header("location:cust_dashboard.php"); 
}




?>