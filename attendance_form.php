<!DOCTYPE html>

<html>

<head>
	<title>PHS Attendance</title>
		<link rel="stylesheet" href="reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="attendance_style.css" type="text/css" media="screen" title="no title" charset="utf-8">

	<script src="attendance_script.js"></script>
</head>

<body>

	
	<header id="header">
				<h1 id="date">
				<?php
				echo date("m/d/Y");
				
				?>
				</h1>
			
				<!-- <h1 id="day" onload="displayDay()">Day</h1> -->
				<form id="sort">
					<select name="sortList">
						<option value="">Sort by:</option>
						<option value="1">Last Name</option>
						<option value="2">Gender</option>
						<option value="3">Lane</option>
					</select>
				</form>
				<!-- <h3 id="sort">sort</sort></h3> -->
	</header>
	
	<div id="list">
		<ul>
			<!-- <li id="swimmer">Swimmer<form>
						<input type="checkbox" name="attendance" value="present" />
					</form></li> -->
			<?php
					require("../credentials.php");
					if ($userName && $dbName && $hostName) {

						$con = mysql_connect($hostName, $userName, $password, $dbName);
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }

						if($con){
							log("Connected.");
							echo "<br />";
						}
							mysql_select_db($dbName, $con);

							$result = mysql_query("SELECT * FROM swimmers");	
							while($row = mysql_fetch_array($result))
							  {
							  echo "<li id='swimmer'>" . $row['firstName'] . " " . $row['lastName'];
							  echo "<form id=" . $row['id'] . " >" . "<input type='checkbox' name='attendance' value='present' />" . "</form>". "</li>";
							  }
							mysql_close($con);

					} else {
						print("No database credentials.");
					}

			?>
		</ul>
	</div>

	
<!--    
		//declare a string for a mysql query
		$swimmerQuery = "SELECT * FROM swimmers";
		$swimmersArray = mysql_query($swimmerQuery);
		print("<ul>");
		foreach($swimmersArray as $swimmer) {
			print("<li>$swimmer</li>");
		}
		print("</ul>");

-->

</body>

</html>