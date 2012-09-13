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
<<<<<<< HEAD
				<?php
				echo date("m/d/Y");
				
=======
				<!-- <script>
					var d=new Date();
					document.write(d);
				</script> -->
				<?php
				echo date("d/m/Y");				
>>>>>>> some extra stuff?
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
						    echo "<li id='swimmer'>";
							echo "<form action='test_form2.php' method='post'>";
						}
							mysql_select_db($dbName, $con);

							$result = mysql_query("SELECT * FROM swimmers");	
							while($row = mysql_fetch_array($result))
							  {
							 
							  echo $row['firstName'] . " " . $row['lastName'];
							  echo "<input type='hidden' name='id' value=" . $row['id'] . "/>";
							  echo "<input id='check' type='checkbox' name='attendance' value='1' />";
							  echo "<br />";
							   
							}
							echo "<input id='submit' type='submit' name='Submit' /> </form>";
							echo "</li>";
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