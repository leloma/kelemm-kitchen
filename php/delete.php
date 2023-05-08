<?php

session_start();

    require("connect.php");
    if(isset($_GET['delete'])){
        $username = $_GET['delete'];
        $conn->query("DELETE FROM register WHERE username = '$username'");
        if ($conn->error) {
            die("Deletion failed: " . $conn->error);
          }
          echo "Deleted ";
          header("location:table.php");
          
    }



?>

