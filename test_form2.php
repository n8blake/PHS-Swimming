<?php
require("../credentials.php");

$con = mysql_connect($hostName, $userName, $password, $dbName);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbName, $con);
$today = date("Y-m-d");

// $swimmer_id = mysql_query("SELECT id from swimmers WHERE lastName='$_POST[lastName]'");

$sql="INSERT INTO attendance (swimmer_id, date, attendance)
VALUES
('$_POST[id]','$today', '$_POST[attendance]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
echo "<br />";
echo "$today";

mysql_close($con);
?>