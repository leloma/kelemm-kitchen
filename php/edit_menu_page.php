
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>
    <link rel="stylesheet" href="../css/register.css?1422585377"> 

</head>
<body>

<?php

if (isset ($_GET["edit"])) {
        require_once("connect.php");
        include("process_login.php");
        include("process_upload.php");
        $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        $result = $conn-> query($sql);

        // $food_name = $_POST["fooditem"];
        // $food_price = $_POST['price'];
        // $food_image_path = $_POST['food-image'];
        // $food_type = $_POST['food-type'];

        $food_id = $_GET["edit"]; // get id through query string


        $qry = mysqli_query($conn,"select * from food_menu where food_id='$food_id'"); // select query

        $data = mysqli_fetch_array($qry); // fetch data

        
        $type_id = $data['type_id'];
    
?>

                <h2>
                <?php echo $_SESSION["username"];?>
                </h2>


    <h1>Edit Menu</h1>

<div class="form-box">
    <form action="edit_menu.php" method="POST" enctype="multipart/form-data" class="input-group">

    <input type="hidden" name="food_id" value="<?php echo $data['food_id']; ?>">
    <label class="labels" for="fooditem">Food Name:</label><br>
    <input type="text" name="fooditem" required="true" placeholder="Food Item Name" class="input-field" value="<?php echo $data['food_name']?>"/><br/><br/>
    
    <label class="labels" for="foodimage">Image:</label><br>
    <input type="file" name="food-image" id="foodimage" required="true" class="input-field" value="<?php echo $original_file_name?>" ><br/><br/>

    <label class="labels" for="foodprice">Price:</label><br>
    <input type="number" name="price" id="foodprice" required="true" placeholder="Food Price" class="input-field" value="<?php echo $data['food_price']?>"><br/><br/>

    <label for="foodtype" class="labels">Type of Food Item</label>

        <select name="food-type" id="food_type" class="input-field" >
        <option name = "food-type" value="Breakfast" <?php if ($type_id == 1): ?>
            selected="selected"
            <?php endif?>
            >Breakfast</option>
        <option name = "food-type" value="Lunch" <?php if ($type_id == 2): ?>
            selected="selected"
            <?php endif?>
            >Lunch</option>
        <option name = "food-type" value="Dinner" <?php if ($type_id == 3): ?>
            selected="selected"
            <?php endif?>
            >Dinner</option>
        <option name = "food-type" value="Dessert" <?php if ($type_id == 4): ?>
            selected="selected" 
            <?php endif?>
        >Dessert</option>
        <option name = "food-type" value="Drink" <?php if ($type_id == 5): ?>
            selected="selected"
            <?php endif?>
        >Drink</option>

        </select>
    <input type="submit" name="submitImage" value="SAVE" class="register-btn">

    </form>

</div>
<?php }  ?>



</body>
</html>