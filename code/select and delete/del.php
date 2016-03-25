<?php
error_reporting(E_ERROR | E_PARSE);
include("config.php");
$id=$_REQUEST["id"];

$query="delete from log where id=$id";
mysql_query($query);
header("location:select.php");
?>