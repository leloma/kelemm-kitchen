
<?php 
require_once("connect.php");
include("process_login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/cust_dashboard.css?1422585377"> 

</head>
<body> 
    <h1>
    <?php echo "Welcome ".$_SESSION["username"];?>
    </h1>

    <h2><a href="menu_customer.php" class="menu_link">MENU</a></h2>

    <br>
    <br>
    <?php
    $sql = "SELECT * from register WHERE username = '".$_SESSION["username"]."'";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
        while ($row = $result-> fetch_assoc()) {?>
            <h3>First Name</h3>
            <p>
            <?php echo $row["f_name"];?>
            </p>
            <h3>Last Name</h3>
            <p>
            <?php echo $row["l_name"];?>
            </p>
            <h3>Email</h3>
            <p>
            <?php echo $row["email"];?>
            </p>
            <h3>Phone Number</h3>
            <p>
            <?php echo $row["phone_number"];?>
            </p>
            <h3>Address</h3>
            <p>
            <?php echo $row["address"];?>
            </p>
            <h3>Username</h3>
            <p>
            <?php echo $row["username"];?>
            </p>

            <br>
            <br><br>
            <a href="editpage.php?edit=<?php echo $row['username'];?>" class= "edit-btn">Edit</a>
            <br>
            <br> <br> <br>

       <?php }
    }
    else {
        echo "Something went wrong";
    }?>

<h2><a href="homepage.php" class="menu_link">LOG OUT</a></h2> <br></br>

    
        
    
    

</body>
</html>