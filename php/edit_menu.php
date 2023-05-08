<?php

require_once("dbconnect.php");
$type = "Breakfast";
$type_id = 0;

if (isset($_POST['submitImage'])) {
    $file = $_FILES["food-image"];
    $file_path="asset/";

    $original_file_name = $_FILES['food-image']['name'];

    $file_tmp_location = $_FILES['food-image']['tmp_name'];

    if(move_uploaded_file($file_tmp_location, $file_path.$original_file_name)){
        if(!empty($_POST['food-type'])) {
            $type = $_POST['food-type'];
            if ($type == "Breakfast") {
                $type_id = 1;
            }
            else if ($type == "Lunch") {
                $type_id = 2;
            }
            else if ($type == "Dinner") {
                $type_id = 3;
            }
            else if ($type == "Dessert") {
                $type_id = 4;
            }
            else if ($type == "Drink") {
                $type_id = 5;
            }

    

        }

        $food_name = $_POST["fooditem"];
        $food_price = $_POST["price"];

    

        $food_id = $_POST['food_id'];

        $sql = "UPDATE food_menu set food_name='$food_name', food_image_path='$original_file_name',
        food_price ='$food_price', `type_id`='$type_id' where `food_id`='$food_id'";

        if(setData($sql)){
            header("location:menu_admin.php");
        }

    };

    
}


?>