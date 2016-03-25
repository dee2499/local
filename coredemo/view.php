<?php
// session_start();
// if(isset($_SESSION['name'])){
    
// }
// else{
//     	echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

// }
require_once ('DbController.php');

$db_handler = new Dbcontroller();
$data = $db_handler->runQuery('SELECT * FROM userdata');

?>
<?php echo $_SESSION['name']; ?>
<br>
<br>
<a href="logout.php">logout</a>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Image</th>
    </tr>
    <?php foreach($data as $dat) { ?>
    <tr>
        <td><?php echo $dat['name'];?></td>
        <td><?php echo $dat['email'];?></td>
        <td><?php echo $dat['phone_no'];?></td>
        <td><img src="uploads/<?php echo $dat['image'];?>"/></td>
        <?php if(isset($_SESSION['admin'])) { ?>
        <td><a href="edit.php?id=<?php echo $dat['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $dat['id']; ?>" >Delete</a></td>
        <td><a href="add.php" >ADD</a></td>
        <?php } ?>
        
    </tr>
        
      <?php  
    } ?>
</table>