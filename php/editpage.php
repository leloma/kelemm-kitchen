<?php
require_once("connect.php");

if (isset($_GET['edit'])) {

    $username = $_GET['edit']; // get id through query string

    $qry = mysqli_query($conn,"select * from register where username='$username'"); // select query

    $data = mysqli_fetch_array($qry); // fetch data

}





?>




<!DOCTYPE html>
<html>
    <head>
    <title>Update Page</title>
    <link rel="stylesheet" href="../css/register.css?1422585377"> 
</head>
    <body>
    <h3>UPDATE</h3>

        <div class="container">
            <div class="form-box">

            
                <form class="input-group" method="post" action="edit.php">
                    <input type="text" name="f_name" value="<?php echo $data['f_name']?>" class="input-field" placeholder="First Name" required>
                    <input type="text" name="l_name" value="<?php echo $data['l_name']?>" class="input-field" placeholder="Last Name" required>
                    <input type="text" name="email" value="<?php echo $data['email']?>" class="input-field" placeholder="Email" required>
                    <input type="text" name="phone_number" value="<?php echo $data['phone_number']?>" class="input-field" placeholder="Phone Number" required>
                    <input type="text" name="address" value="<?php echo $data['address']?>" class="input-field" placeholder="Address" required>
                    <input type="text" name="username" value="<?php echo $username?>" class="input-field" placeholder="Username" required>
                    <input type="password" name="password" value="<?php echo $data['password']?>" class="input-field" placeholder="Password" required>
                    <button type="submit" class="register-btn" name="update" value="update">Save</button>


                </form>
            </div>
        </div>
        

    </body>
</html>

