<?php
// Application Loading
require_once('../private/initialise.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Our Tutors | Online Academy</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dist/css/style.css">
</head>
<body>

<div class="header">
	Online Academy <br>
	BIS Design & Development Coursework - W1715755 | 2016074
</div>

<div class="row">
	
	<div class="column side">
		<?php include('dist/shared/navigation.html');?> 
	</div>
	
	<div class="column middle">
		<h1>Our Tutors</h1>
		<?php
		$all_tutors = Tutor::find_all(); // Retrieving all Tutors from DB
		
		// Table Creation
		echo "<table style='width: 100%;'>";
		echo "<tr bgcolor='#ffad9c'>";
		echo "<th style='padding: 0.5rem'>Name</th>";
		echo "<th style='padding: 0.5rem'>Email</th>";
		echo "<th style='padding: 0.5rem'>Subjects to Teach</th>";
		echo "<th>&nbsp;</th>";
		echo "</tr>";
		foreach ($all_tutors as $obj) {
			echo "<tr>";
			echo "<td style='padding: 0.8rem'><a href='view.php?id=".$obj->id."'>".$obj->name."</a></td>";
			echo "<td style='padding: 0.8rem'>".$obj->email."</td>";
			echo "<td style='padding: 0.8rem'>".$obj->subjectsToTeach;
			echo "<a href='update_subject.php?id=".$obj->id."' style='float: right;'>[EDIT]</a>";
			echo "</td>";
			echo "<td style='padding: 0.8rem'><a href='delete.php?id=".$obj->id."'>Delete</a></td>";
			echo "</tr>";
		}
		echo "</table>";
		?>
	</div>

	<div class="footer">
		BIS Design & Development Module <br>
		Coursework Submission - W1715755 | 2016074
	</div>
	
</div>

</body>
</html>