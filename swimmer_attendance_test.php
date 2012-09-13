<!DOCTYPE html>

<html>

<head>
	<title>PHS Attendance</title>
		<link rel="stylesheet" href="reset.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="attendance_style.css" type="text/css" media="screen" title="no title" charset="utf-8">

</head>

<body>
	<header id="header">
				<h1 id="date"><?php echo date("d-m-Y"); ?></h1>
				<h3 id="sort">sort</sort></h3>
	</header>

<form action="test_form2.php" method="post">
swimmer_id: <input type="text" name="swimmer_id" />
Present: <input type="checkbox" name="attendance" value="1" />
<input type="submit" value="Submit" />
</form>

</body>
</html>