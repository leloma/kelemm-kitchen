<?php

session_start();

    require("connect.php");
    if(isset($_GET['delete'])){
        $food_id = $_GET['delete'];
        $conn->query("DELETE FROM food_menu WHERE food_id = '$food_id'");
        if ($conn->error) {
            die("Deletion failed: " . $conn->error);
          }
          echo "Deleted ";
          header("location:menu_admin.php");
          
    }



?>

