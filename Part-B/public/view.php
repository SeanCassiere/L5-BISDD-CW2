<?php
// Application Loading
require_once('../private/initialise.php');
// URL Capture
if ( isset($_GET['id']) ) {
  if ( $_GET['id'] == '' ) { $URL_TutorId = NULL; } else { $URL_TutorId = $_GET['id']; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>View Tutor | Online Academy</title>
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
		<h1>View Tutor</h1>
		<?php
    if (isset($URL_TutorId)) {
      $tutor_object = Tutor::find_by_id($URL_TutorId); // Finding the Tutor Details based on ID
      if ($tutor_object != NULL) {
        // Table Creation
        echo "<table style='min-width: 50%;'>";
        
        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Name</td><td style='padding: 0.8rem'>".$tutor_object->name."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Email</td><td style='padding: 0.8rem'><a href='mailto:".$tutor_object->email."' target='_blank'>".$tutor_object->email."</a></td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Phone Number</td><td style='padding: 0.8rem'>".$tutor_object->phoneNumber."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Qualifications</td><td style='padding: 0.8rem'>".$tutor_object->qualifications."<a href='update_subject.php?id=".$tutor_object->id."' style='float: right;'>[EDIT]</a></td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Subjects to Teach</td><td style='padding: 0.8rem'>".$tutor_object->subjectsToTeach."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td bgcolor='#ffad9c' style='padding: 0.3rem; font-weight: bold;'>Rate Per Hour</td><td style='padding: 0.8rem'>".$tutor_object->ratePerHour."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td <td colspan='2' style='padding: 0.8rem'><a href='delete.php?id=".$tutor_object->id."'>DELETE TUTOR</a></td>";
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
		Coursework Submission - W1715755 | 2016074
	</div>
	
</div>

</body>

</html>