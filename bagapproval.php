<?php
include 'connection.php';
$id=$_GET['eid'];
$query="update work set status='1' where lid='$id'";
mysqli_query($con,$query);
header("location:viewfarmer.php");
?>
