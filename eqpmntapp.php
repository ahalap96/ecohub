<?php
include 'connection.php';
$id=$_GET['eid'];
$query="update equipments set status='1' where equip_id='$id'";
mysqli_query($con,$query);
header("location:vieweqpmt.php");
?>