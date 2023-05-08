<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/admin_page.css?1422585377"> 

</head>
<body>

    <?php
    require_once("connect.php");
    include("process_login.php");
    $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
    $result = $conn-> query($sql);
    ?>

            <h1>
            <?php echo "Welcome ".$_SESSION["username"];?>
            </h1>

<div class="links">
    <a href="table.php">View Customers</a></br>
</div>
<div class="links">
    <a href="upload_item.php" >Add Item To Menu</a>
</div>
<div class="links">
    <a href="menu_admin.php" >View And Edit Menu</a>
</div>
</body>
</html>