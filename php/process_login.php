
<!-- <?php
session_start();
require("connect.php");
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * from register where username = '$username' and `password` = '$password'";
$sql1 = "SELECT * from `admin` where username = '$username' and `password` = '$password'";

$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);


if(isset($_POST["login"]))
{
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        header("location:login.php");
        exit();
    }
    else 
    {
        
        
        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION["username"] = $_POST["username"];
            header("location:cust_dashboard.php");
 
        }
        else if (mysqli_num_rows($result1) > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:admin_page.php");

        } 
        else {
            header("location:login.php");
        }


    }
}
?> -->

