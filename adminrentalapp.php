<?php
include 'connection.php';
$id=$_GET['eid'];
$query="update equip_request set request='1' where er_id='$id'";
mysqli_query($con,$query);
header("location:vieweqpmtrqst.php");
?>