<?php

require_once("dbconnect.php");
$type = "Breakfast";
$type_id = 0;
if (isset($_POST["submitImage"])) {
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
        $sql = "INSERT INTO food_menu(food_name, food_image_path,food_price, `type_id`) VALUES('".$_POST
        ["fooditem"]."','$original_file_name','".$_POST['price']."', '$type_id')";

        if(setData($sql)){
            header("location:admin_page.php");
        }

    };

    
}


?>