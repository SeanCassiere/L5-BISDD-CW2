<?php
// Application Loading
require_once('../private/initialise.php');
if ( isset($_GET['id']) ) {
  if ( $_GET['id'] == '' ) { $URL_TutorId = NULL; } else { $URL_TutorId = $_GET['id']; }
} else {
  $URL_TutorId = NULL;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Subject to Teach | Online Academy</title>
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
		<h1>Update Subject to Teach for a Tutor</h1>
    <?php
    if ( $URL_TutorId != NULL ) {
      /* IF TutorId has been given */

      $tutor = Tutor::find_by_id( $URL_TutorId );

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /* IF Page Loads with POST REQUEST METHOD */
  
        // Capture and Assign POST variables to Args Array
        $args = [];
        $args['subjectsToTeach'] = $_POST['subjectsToTeach'];
  
        // Construct new Tutor Object
        $tutor->subjectsToTeach = $args['subjectsToTeach'];

        // Tutor Object Update to DB
        $results = $tutor->update();
  
        // Success Message
        if ($results) {
          echo "<h4>Subject has been updated Successfully!</h4>";
  
          echo "<table>";
          echo "<tr> <td class='left'><b> Tutor ID </b></td> <td style='padding: 0.2rem'>" . $tutor->id . "</td> </tr>";
          echo "<tr> <td class='left'><b> Name </b></td> <td style='padding: 0.2rem'>" . $tutor->name . "</td> </tr>";
          echo "<tr> <td class='left'><b> Email </b></td> <td style='padding: 0.2rem'>" . $tutor->email . "</td> </tr>";
          echo "<tr> <td class='left'><b> Phone Number </b></td> <td style='padding: 0.2rem'>" . $tutor->phoneNumber . "</td> </tr>";
          echo "<tr> <td class='left'><b> Qualifications </b></td> <td style='padding: 0.2rem'>" . $tutor->qualifications . "</td> </tr>";
          echo "<tr> <td class='left'><b> Subjects To Teach </b></td> <td style='padding: 0.2rem'>" . $tutor->subjectsToTeach . "</td> </tr>";
          echo "<tr> <td class='left'><b> Rate Per Hour </b></td> <td style='padding: 0.2rem'>" . $tutor->ratePerHour . "</td> </tr>";
          echo "</table>";
        } else {
          // If Error Occurs
          echo Database::$database->error;
        }
  
      } else {
        /* IF Page Loads WITHOUT POST REQUEST METHOD */
  
        // Form-Table Creation
        echo "<h4>Fill in the subjects to teach.</h4>";
        echo "<h5>Items marked with *** are numerical fields.</h5>";
        echo "<form action='update_subject.php?id=".$URL_TutorId."' method='POST'>";
        echo "<table>";
    
        echo "<tr>";
        echo "<td class='left'>Name</td>";
        echo "<td>".$tutor->name."</td>";
        echo "</tr>";
    
        echo "<tr>";
        echo "<td class='left'>Email</td>";
        echo "<td>".$tutor->email."</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td class='left'>Phone Number</td>";
        echo "<td>".$tutor->phoneNumber."</td>";
        echo "</tr>";
    
        echo "<tr>";
        echo "<td class='left'>Qualifications</td>";
        echo "<td>".$tutor->qualifications."</td>";
        echo "</tr>";
    
        echo "<tr>";
        echo "<td class='left'>Subjects to Teach</td>";
        echo "<td><textarea name='subjectsToTeach' id='subjectsToTeach' required>".$tutor->subjectsToTeach."</textarea></td>";
        echo "</tr>";
    
        echo "<tr>";
        echo "<td class='left'>Rate Per Hour</td>";
        echo "<td>".$tutor->ratePerHour."</td>";
        echo "</tr>";
    
        echo "</table>";
        echo "<br>";
        echo "<input type='submit' value='Update Subject'>";
        echo "</form>";
      }
    } else {
      echo "<p>A Tutor's ID was not Provided</p>";
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