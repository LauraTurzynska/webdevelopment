<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Front page</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	include "nav.php";
	?>
	<h1>Home</h1>
	<?php
	$name = "Laura";
	$lname = "Turzynska";
	$age = "22";
	
	if(is_string($name)) {
	echo "<p>Yes my name is indeed $name!<p>";	
	}else {
		echo "<p>I have no name<p>";
	}	
	?>
	
	<p>Hello my name is <?php echo $name, $lname?> I am <?php echo $age?> years old</p>
</body>
</html>