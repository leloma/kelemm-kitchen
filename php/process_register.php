<?php
require("connect.php");

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

//Insert data
$sql_insert = "INSERT INTO register(f_name, l_name, email, phone_number, `address`, username, `password`)
VALUES ('$f_name','$l_name', '$email', '$phone_number', '$address', '$username', '$password')";

//


if($conn->query($sql_insert)===TRUE){
    echo " Inserted Successfully ". "<br>";
}
else{
    echo " Error ".$conn->error." <br>";
}


?>



