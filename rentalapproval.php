<?php
include 'connection.php';
session_start();
$id=$_GET['eid'];
$s=$_SESSION['id'];
// $query="update equipments set status='1' where equip_id='$id'";
// mysqli_query($con,$query);
mysqli_query($con,"INSERT INTO `equip_request`(`equip_id`, `lid`) VALUES ('$id','$s')");
header("location:frentalview.php");
?>