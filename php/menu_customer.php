<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu_admin.css?1422585377"> 

</head>
<body>

<?php
        require_once("connect.php");
        include("process_login.php");
        $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        $result = $conn-> query($sql);
?>

                <h2>
                <?php echo $_SESSION["username"];?>
                </h2>
<h2><a href="view_cart.php">VIEW CART</a></h2>

    <?php

include("breakfast_menu.php");
include("lunch_menu.php");
include("dinner_menu.php");
include("drinks_menu.php");
include("dessert_menu.php");

    $sql = "SELECT food_menu.food_id,food_menu.food_name, food_menu.food_price, food_menu.food_image_path ,menu_type.food_type_name FROM food_menu,
    menu_type WHERE food_menu.type_id = menu_type.type_id";
    $result = $conn-> query($sql);

    
    ?>



</body>
</html>