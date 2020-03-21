<?php
// Application Loading
require_once('../private/initialise.php');
// URL Capture
if ( isset($_GET['id']) ) {
  if ( $_GET['id'] == '' ) { $URL_tutorId = NULL; } else { $URL_tutorId = $_GET['id']; }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete Tutor | Online Academy</title>
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
    <h1>Delete a Tutor</h1>
    <?php
    if (isset($URL_tutorId)) {
			/* IF Page Loads with GET REQUEST METHOD */

      $deleted_tutor = Tutor::find_by_id($URL_tutorId); // Capture Object
      $deleted_tutor->delete(); // Delete Object from DB

      echo "<p> The following Tutor's record have been deleted. </p>";

			echo "<table>";
			echo "<tr> <td class='left'><b> Tutor ID </td> <td>" . $deleted_tutor->id . "</td> </tr>";
			echo "<tr> <td class='left'> Name </td> <td>" . $deleted_tutor->name . "</td> </tr>";
			echo "<tr> <td class='left'> Email </td> <td>" . $deleted_tutor->email . "</td> </tr>";
			echo "<tr> <td class='left'> Phone Number </td> <td>" . $deleted_tutor->phoneNumber . "</td> </tr>";
			echo "<tr> <td class='left'> Qualifications </td> <td>" . $deleted_tutor->qualifications . "</td> </tr>";
			echo "<tr> <td class='left'> Subjects To Teach </td> <td>" . $deleted_tutor->subjectsToTeach . "</td> </tr>";
			echo "<tr> <td class='left'> Rate Per Hour </td> <td>" . $deleted_tutor->ratePerHour . "</td> </tr>";
			echo "</table>";

    } else {
			/* IF Page LOADS WITHOUT GET REQUEST METHOD */
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