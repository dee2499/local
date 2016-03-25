<?php
include("config.php");
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
    $result_set=mysqli_query($con,$sql_query);
    while($row=mysqli_fetch_row($result_set))
    {
        ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
        <td><?php echo $row[4]; ?></td>
  <td align="center">
  <a href="user-update.php?id=<?php echo $row[0]; ?>"><img src="b_edit.png" align="EDIT" /></a></td>
  <td align="center">
  <a href="del.php?id=<?php echo $row[0]; ?>"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
        }
    ?>
    </table>
    </div>
</div>
<a href="insert.php">Add more Data</a>
</center>
</body>
</html>