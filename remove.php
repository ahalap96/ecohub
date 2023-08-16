<?php
include 'connection.php';
$id=$_GET['eid'];
mysqli_query($con,"DELETE FROM `cart` WHERE prod_id='$id'");
header("location:uproductview.php");
?>