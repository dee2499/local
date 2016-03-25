<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
$id=$_REQUEST["id"];

$query="delete from users where id=$id";
mysqli_query($con,$query);
header("location:view.php");
?>