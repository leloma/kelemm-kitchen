<?php
session_start();
require_once("connect.php");

if(isset($_POST["remove"]))
{
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if ($values["food_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                header("location:view_cart.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/table.css?1422585377"> 

</head>
<body>

<?php
        $sql = "SELECT f_name, l_name, email, phone_number, `address`, username FROM register";
        $result = $conn-> query($sql);
?>

                <h1>
                <?php echo $_SESSION["username"];?>
                </h1>

    <h2>Order Details</h2>
    <table>
        <tr>
            <th>Food Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Action</th>

        </tr>

        <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0; 
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["food_name"]; ?></td>
                        <td><?php echo $values["food_quantity"]; ?></td>
                        <td><?php echo $values["food_price"]; ?></td>
                        <td><?php echo ($values["food_quantity"] * $values["food_price"]); ?></td>
                        <td>
                        <form method="POST" action="view_cart.php?action=delete&id=<?php echo $row["food_id"];  ?>">

                        <input type="submit" name="remove" class= "delete-btn" value="Remove"/>
                </form>
                    </td>

                    </tr>
                    <?php
                    
                        $total = $total + ($values["food_quantity"] * $values["food_price"]);
                        
                }?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Kshs <?php echo $total?></td>
                    <td></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>