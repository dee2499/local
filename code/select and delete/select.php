<?php
include("config.php");
error_reporting(E_ERROR | E_PARSE);
$query="select * from users";
$r=mysql_query($query);
echo "<table border='1'>";
echo "<tr><td>username</td><td>password</td>";
while($row=mysql_fetch_assoc($r))

{

echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td><a href='del.php?id=".$row['id']."'>delete</a></td></tr>";
}
echo "</table>";
?>