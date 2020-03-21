<?php
if ( isset($_GET['id']) ) {
  if ( $_GET['id'] == '' ) { $URL_TutorId = NULL; } else { $URL_TutorId = $_GET['id']; }
}
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
	BIS Design & Development Coursework - W1715755 | 2016075
</div>

<div class="row">
	
	<div class="column side">
		<?php include('dist/shared/navigation.html');?> 
	</div>
	
	<div class="column middle">
		<h1>Our Tutors</h1>
		<?php
    include('../private/initialise.php');
    if (isset($URL_TutorId)) {
      $tutor_object = Tutor::find_by_id($URL_TutorId); // Finding the Tutor Details based on ID
      if ($tutor_object != NULL) {
        // Table Creation
        echo "<table style='width: 100%;'>";
        
        echo "<tr bgcolor='yellowgreen'>";
        echo "<th style='padding: 0.3rem'>Name</th>";
        echo "<th style='padding: 0.3rem'>Email</th>";
        echo "<th style='padding: 0.3rem'>Phone Number</th>";
        echo "<th style='padding: 0.3rem'>Qualifications</th>";
        echo "<th style='padding: 0.3rem'>Subjects to Teach</th>";
        echo "<th style='padding: 0.3rem'>Rate Per Hour</th>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->name."</td>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->email."</td>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->phoneNumber."</td>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->qualifications."</td>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->subjectsToTeach."</td>";
        echo "<td style='padding: 0.8rem'>".$tutor_object->ratePerHour."</td>";
        echo "</tr>";
        
        echo "</table>";
      } else {
        echo "<p>Tutor does not exist.</p>";
      }
    } else { // IF tutorId not provided
      echo "<p>You have NOT provided a Tutor ID.</p>";
    }
		?>
	</div>

	<div class="footer">
		BIS Design & Development Module <br>
		Coursework Submission - W1715755 | 2016075
	</div>
	
</div>

</body>

</html>