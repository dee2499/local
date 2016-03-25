<?php
session_start();
if(isset($_SESSION['name'])){
    
}
else{
    	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

require_once ('DbController.php');

$db_handler = new Dbcontroller();
$id = $_GET['id'];
$data = $db_handler->insert('DELETE FROM userdata WHERE id='.$id);

    echo '<script type="text/javascript"> document.location = "view.php"; </script>';

?>
