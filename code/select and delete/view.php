<?php
include_once 'config.php';
?>
<html>
<head>
<title>Test</title>
</head>
<body>
<center>
<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
    $sql_query="SELECT * FROM users";
    $result_set=mysql_query($sql_query);
    while($row=mysql_fetch_row($result_set))
    {
            ?>
            <tr>
            <td><?php echo $dat['name'];?></td>
        <td><?php echo $dat['email'];?></td>
        <td><?php echo $dat['phone_no'];?></td>
        <td><img src="uploads/<?php echo $dat['image'];?>"/></td>
        <?php if(isset($_SESSION['admin'])) { ?>
        <td><a href="edit.php?id=<?php echo $dat['id']; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $dat['id']; ?>" >Delete</a></td>
        <td><a href="add.php" >ADD</a></td>
            </tr>
            <?php
        }
    ?>
    </table>
    </div>
</div>

</center>
</body>
</html>