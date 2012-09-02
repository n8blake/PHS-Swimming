<?php
require("../credentials.php");
$con = mysql_connect($hostName, $userName, $password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($dbName, $con);

$result = mysql_query("SELECT * FROM swimmers");

while($row = mysql_fetch_array($result))
  {
  echo $row['firstName'] . " " . $row['lastName'];
  echo "<br />";
  }

mysql_close($con);
?>