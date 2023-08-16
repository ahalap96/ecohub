<?php
include 'connection.php';
$id=$_GET['eid'];
$query="update products set status='1' where farm_id='$id'";
mysqli_query($con,$query);
header("location:viewproduct.php");
?>

