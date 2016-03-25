<?php
include ('model/model.php');
include ('controller/controller.php');
include ('view/view.php');


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
?>
<html>
<head>
<title> Deepak Visani </title>
</head>
<form>
	<table align="center">

		<tr><td>
		<label>Username :</label><input type="text" name = "username">
		</td></tr>
		<tr><td>
		<label>Password : </label><input type="password" name = "password">
		</td></tr>
		<tr><td>
		<input type="button" name = "Login" value="Submit">
		
		</td></tr> 
		
	</table>
</form>
