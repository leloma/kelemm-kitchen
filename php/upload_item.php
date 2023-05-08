
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
    <link rel="stylesheet" href="../css/register.css?1422585377"> 

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


    <h1>Add Items To Menu</h1>

<div class="form-box">
    <form action="process_upload.php" method="POST" enctype="multipart/form-data" class="input-group">
    <label class="labels" for="fooditem">Food Name:</label><br>
    <input type="text" name="fooditem" required="true" placeholder="Food Item Name" class="input-field"/><br/><br/>
    
    <label class="labels" for="foodimage">Image:</label><br>
    <input type="file" name="food-image" id="foodimage" required="true" class="input-field" ><br/><br/>

    <label class="labels" for="foodprice">Price:</label><br>
    <input type="number" name="price" id="foodprice" required="true" placeholder="Food Price" class="input-field"><br/><br/>

    <label for="foodtype" class="labels">Type of Food Item</label>

        <select name="food-type" id="cars" class="input-field">
        <option value="Breakfast">Breakfast</option>
        <option value="Lunch">Lunch</option>
        <option value="Dinner">Dinner</option>
        <option value="Dessert">Dessert</option>
        <option value="Drink">Drink</option>

        </select>
    <input type="submit" name="submitImage" value="SAVE" class="register-btn">

    </form>
</div>

</body>
</html>