<?php
require("../credentials.php");
// mysqli
if ($userName && $dbName && $password) {
	
	$con = mysql_connect($hostName, $userName, $password);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	
$mysqli = new mysqli($hostName, $userName, $password, $dbName);
$result = $mysqli->query("SELECT * FROM `swimmers`");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
print("$result");

// // PDO
// $pdo = new PDO('mysql:host=example.com;dbname=database', 'user', 'password');
// $statement = $pdo->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = $statement->fetch(PDO::FETCH_ASSOC);
// echo htmlentities($row['_message']);
// 
// // mysql
// $c = mysql_connect("example.com", "user", "password");
// mysql_select_db("database");
// $result = mysql_query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
// $row = mysql_fetch_assoc($result);
// echo htmlentities($row['_message']);

} else {
	print("No database credentials.");
}

?>