<?php
require("../credentials.php");

$con = mysql_connect($hostName, $userName, $password, $dbName);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbName, $con);

$sql="INSERT INTO attendance (swimmer_id, date, attendance)
VALUES
('$_POST[swimmer_id]','$_POST[date]', '$_POST[attendance]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>