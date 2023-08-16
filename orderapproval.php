<?php
include 'connection.php';
$id=$_GET['eid'];
$query="update product_order set ostatus='1' where order_id='$id'";
mysqli_query($con,$query);
header("location:fvieworder.php");
?>