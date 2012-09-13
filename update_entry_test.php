<?php
require("../credentials.php");

$con = mysql_connect($hostName, $userName, $password, $dbName);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbName, $con);
$today = date("Y-m-d");

$sql="UPDATE attendance 
SET attendance = '1' 
WHERE swimmer_id ='$_POST[swimmer_id]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record updated";
echo "<br />";
echo "$today";

mysql_close($con);
?>