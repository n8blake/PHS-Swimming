<?php
$con = mysql_connect("localhost","admin","qanotify");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Create database
if (mysql_query("CREATE DATABASE swimmers",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }

// Create table
mysql_select_db("swimmers", $con);
$sql = "CREATE TABLE Persons
(
personID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";

// Execute query
mysql_query($sql,$con);

mysql_close($con);
?>