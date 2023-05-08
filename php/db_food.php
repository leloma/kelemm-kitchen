<?php
require_once("dbconnect.php");

function getFood(){
    $sql = "SELECT * FROM food_menu";
    $data = getData($sql); 
    return $data;
}

?>