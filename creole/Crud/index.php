<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>

    <?php
    if(isset($_GET['delete_id']))
        {
        $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
        echo $sql_query;
        exit;
        mysql_query($sql_query);
        header("Location: $_SERVER[PHP_SELF]");
        }
    ?>

    <?php
    $sql_query="SELECT * FROM users";
    $result_set=mysql_query($sql_query);
    while($row=mysql_fetch_row($result_set))
    {
        ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
  <td align="center">
  <a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
  <td align="center">
  <a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
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