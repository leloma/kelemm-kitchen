<?php
    session_start();
    require_once("connect.php");
  
    if (isset($_POST["add_to_cart"])) {
        if (isset($_SESSION["shopping_cart"])) {
            $food_array_id = array_column($_SESSION["shopping_cart"], "food_id");
            if (!in_array($_GET["id"], $food_array_id)) {
                $count = count($_SESSION["shopping_cart"]);
                $food_array = array(
                    'food_id' => $_GET["id"],
                    'food_name' => $_POST["food_name"],
                    'food_price' => $_POST["food_price"],
                    'food_quantity' => $_POST["food_quantity"]
                );
                $_SESSION["shopping_cart"][$count] = $food_array;
                
            }

        }

        else {
            $food_array = array(
                'food_id' => $_GET["id"],
                'food_name' => $_POST["food_name"],
                'food_price' => $_POST["food_price"],
                'food_quantity' => $_POST["food_quantity"]
            );
            $_SESSION["shopping_cart"][0] = $food_array;
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
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





    <?php
if (isset($_POST["order_btn"])) {


    $food_id = $_POST['food_id'];
    $sql = "SELECT food_menu.food_id,food_menu.food_name, food_menu.food_price, food_menu.food_image_path ,menu_type.food_type_name FROM food_menu,
    menu_type WHERE food_menu.type_id = menu_type.type_id AND food_menu.food_id = $food_id";
    $result = $conn-> query($sql);

    
    ?>




    <?php
    
    if($result !== false && $result-> num_rows > 0 )
    { ?>
        <?php while ($row = $result-> fetch_assoc()) {?>
            <div  class="boxes center_box" >
                <div class="images">
                <img src="asset/<?php echo $row['food_image_path'];?>" width="150" height="150" ></img>
                </div>

                <form method="POST" action="add_to_cart.php?action=add&id=<?php echo $row["food_id"];  ?>">
                <div class="details">

                    <h3 class="food-title"><?php echo $row['food_name'];?></h3>
                    <h3>Price(Kshs): <?php echo $row['food_price'];?></h3>
                    <h3>Type: <?php echo $row['food_type_name'];?></h3>
                    <label for="food_quantity">Quantity</label><br>
                    <input type="number" name="food_quantity" id="food_quantity"  required="true" placeholder="Quantity" class="input-field"><br/><br/>
                    <input type="hidden" name="food_id" value="<?php echo $row["food_id"]; ?>"  />
                    <input type="hidden" name="food_name" value="<?php echo $row["food_name"]; ?>"  />
                    <input type="hidden" name="food_price" value="<?php echo $row["food_price"]; ?>"  />

                    <input type="submit" name="add_to_cart" class= "edit-btn" value="Add To Cart"/><br></br>


                </div>
        </form>


            </div>

        <?php } ?>
    <?php } } ?>
</body>
</html>