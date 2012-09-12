<?php
require("../credentials.php");

$con = mysql_connect($hostName, $userName, $password, $dbName);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbName, $con);

$sql="INSERT INTO swimmers (firstName, lastName)
VALUES
('$_POST[firstname]','$_POST[lastname]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>