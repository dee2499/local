<?php
session_start();

require_once ('DbController.php');

$db_handler = new Dbcontroller();

if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $password = $_POST['password'];
    $data = $db_handler->login("SELECT * FROM userdata WHERE name = '$name' AND password='$password'");
    $admin_data = $db_handler->runQuery("SELECT * FROM userdata WHERE name = '$name' AND password='$password'");
    if($admin_data[0]['is_admin'] == '1'){
                $_SESSION['admin'] = '1';
    echo '<script type="text/javascript">document.location = "view.php";</script>';

    }
    if($data == '1'){
        $_SESSION['name'] = $name;
            echo '<script type="text/javascript">document.location = "view.php";</script>';

    }
    else{
        echo 'wrong username and password';
    }
    
}

?>




<html>
    <body>
        <table>
            <form name="register" method="post" >
                <tr>
                    <td>Name:</td>
                    <td><input type="text" class="user_name" name="name"></td>
                </tr>
                <tr>
                    <td>password:</td>
                    <td><input type="text" name="password"></td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="submit" name="submit">
                    </td>
                </tr>
            </form>
        </table>
    </body>
</html>