<?php
session_start();
if(isset($_SESSION['name'])){
    
}
else{
    	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

session_unset();

session_destroy();
    	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

?>
