<?php
session_start();
if(isset($_SESSION['name'])){
    
}
else{
    	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

}

require_once ('DbController.php');

$db_handler = new Dbcontroller();

if(isset($_POST['submit'])){
    $id = $_POST['hidden'];
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone_no'];
    $image = $_FILES['image']['name'];
    
    $db_handler->insert("UPDATE userdata SET name='$name',password='$pwd',email='$email',phone_no='$phone',image='$image' WHERE id=$id");
    
    echo '<script type="text/javascript"> document.location = "view.php"; </script>';
}
$id = $_GET['id'];
$data = $db_handler->runQuery('SELECT * FROM userdata WHERE id='.$id);


?>

<html>
    <body>
        <table>
            <form name="register" method="post" enctype="multipart/form-data">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $data[0]['name']; ?>"></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="text" name="password" value="<?php echo $data[0]['password']; ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $data[0]['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="text" name="phone_no" value="<?php echo $data[0]['phone_no']; ?>"></td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="image" value="<?php echo $data[0]['image']; ?>"></td>
                </tr>
                <tr>
                <input type="hidden" value="<?php echo $data[0]['id']; ?>" name="hidden">
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </form>
        </table>
    </body>
</html>