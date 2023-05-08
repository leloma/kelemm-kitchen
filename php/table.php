<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page </title>
    <link rel="stylesheet" href="../css/table.css?1422585377"> 
    
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php
        require_once("connect.php");
        include("process_login.php");
        $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        $result = $conn-> query($sql);
        ?>

                <h1>
                <?php echo $_SESSION["username"];?>
                </h1>

                <h2>Customers</h2>

        <?php
        if($result-> num_rows > 0 )
        { ?>
            <?php while ($row = $result-> fetch_assoc()) {?>
                <tr>
                    <td><?php echo $row['f_name'];?></td>
                    <td><?php echo $row['l_name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['phone_number'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['username'];?></td>

                    <td><a href="delete.php?delete=<?php echo $row['username'];?>" class="del-btn">Delete</a></td>

                </tr>

            <?php } ?>
            <?php echo "</table>";?>
        <?php } ?>


        </table>
</body>
</html>
            
