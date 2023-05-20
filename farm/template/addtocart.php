<?php
session_start();
$id = $_GET["proid"];
if(in_array($id,$_SESSION["mycart"])){
    $_SESSION["msg"]="PRODUCT ALREADY EXIST";
}else{
    array_push($_SESSION["mycart"],$id);
    $_SESSION["msg"] = "PRODUCT ADDED SUCCESSFULLY";



}
header("location:product.php");


?>