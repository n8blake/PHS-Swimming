<?php
require("../credentials.php");
if ($userName && $dbName && $hostName) {
	
	$con = mysql_connect($hostName, $userName, $password);
	if($con){
		print("Connected.");
		
		// Execute query
		
		// $sql = "SELECT * FROM `swimmers`";
		
		$mysqli = new mysqli($hostName, $userName, $password, $dbName);
		$result = $mysqli->query("SELECT * FROM `swimmers`");		
		$swimmersArray = array($result);
		print_r ($result);
		mysql_close($con);
	}
	
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	

	


} else {
	print("No database credentials.");
}

?>

