<?php
require("../credentials.php");
if ($userName && $dbName && $hostName) {
	
	$con = mysql_connect($hostName, $userName, $password, $dbName);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
	if($con){
		print("Connected.");
		echo "<br />";
	}
		mysql_select_db($dbName, $con);

		$result = mysql_query("SELECT * FROM swimmers");	
		while($row = mysql_fetch_array($result))
		  {
		  echo $row['firstName'] . " " . $row['lastName'];
		  echo "<br />";
		  }
		mysql_close($con);

} else {
	print("No database credentials.");
}

?>
