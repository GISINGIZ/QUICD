<?php
include('conn.php');
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM filt WHERE c_id=$id");
if($delete) {
$alert="<script>alert('deleted succesfully');</script>";
echo $alert;
header("location:index.php");
}
?>