<?php
include 'connection.php';
session_start();
$id=$_GET['eid'];
$s=$_SESSION['id'];
mysqli_query($con,"INSERT INTO `product_order`( `prod_id`, `lid`) VALUES ('$id','$s')");
echo "<script>alert('successfully ordered');</script>";
header("location:uproductview.php");
?>