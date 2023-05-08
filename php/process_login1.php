<?php

    session_start();
    require_once("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM register WHERE username = '$username' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);

    if (isset ($_POST["login"])) {
        if (empty($username)||empty($password)) {
            header("location:login.php");
            exit();
    
        }

        else {
            if (mysqli_num_rows($result) > 0) {
                $_SESSION["username"] = $username;
                header("location:cust_dashboard.php");
            }
            else {
                header("location:login.php");
            }
        }
    }
?>