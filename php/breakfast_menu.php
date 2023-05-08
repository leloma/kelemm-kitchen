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

    $sql = "SELECT food_menu.food_id,food_menu.food_name, food_menu.food_price, food_menu.food_image_path ,menu_type.food_type_name FROM food_menu,
    menu_type WHERE food_menu.type_id = menu_type.type_id AND food_menu.type_id = '1'";
    $result = $conn-> query($sql);

    
    ?>


<h1>Breakfast</h1>


    <?php
    
    if($result-> num_rows > 0 )
    { ?>
        <?php while ($row = $result-> fetch_assoc()) {?>
            <div class="boxes">
                <div class="images">
                <img src="asset/<?php echo $row['food_image_path'];?>" width="150" height="150" ></img>
                </div>

                <form method="POST" action="add_to_cart.php">
                <div class="details">
                <input type="hidden" readonly name="food_id" value="<?php echo $row['food_id']; ?>">

                    <h3 class="food-title"><?php echo $row['food_name'];?></h3>
                    <h3>Price(Kshs): <?php echo $row['food_price'];?></h3>
                    <h3>Type: <?php echo $row['food_type_name'];?></h3>
                <button type="submit" name="order_btn" class= "edit-btn">Order</button>

                </div>
        </form>
                <div class="edit_and_delete">

                </div>


            </div>

        <?php } ?>
    <?php } ?>
</body>
</html>