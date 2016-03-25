<?php
session_start();
// if(isset($_SESSION['name'])){
    
// }
// else{
//     	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

// }


require_once ('DbController.php');

$db_handler = new Dbcontroller();

if(isset($_POST['submit'])){
    
    $path = 'uploads/';
    $dir = $path.time().basename($_FILES['image']['name']);
        if(file_exists($dir)){
            echo 'sorry';
            }
            else
            {

            }
    move_uploaded_file($_FILES['image']['tmp_name'], $dir);
    $name = $_POST['name'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $image = $_FILES['image']['name'];
    
    echo "INSERT INTO userdata (name,password,email,phone_no,image) VALUES ('$name','$pwd','$email','$phone_no','$image')"; die;

     $db_handler->insert("INSERT INTO userdata (name,password,email,phone_no,image) VALUES ('$name','$pwd','$email','$phone_no','$image')"); 

    
    
    echo '<script type="text/javascript">document.location = "view.php";</script>';
    
}

?>

<html>
    <body>
        <table>
            <form name="register" method="post" enctype="multipart/form-data">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="text" name="phone_no"></td>
                </tr>
                <tr>
                    <td>Image:</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" name="submit" value="submit"></td>
                </tr>
            </form>
        </table>
    </body>
</html>