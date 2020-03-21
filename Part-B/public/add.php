<?php
// Application Loading
require_once('../private/initialise.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Tutor | Online Academy</title>
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
		<h1>Add a Tutor</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      /* IF Page Loads with POST REQUEST METHOD */

      // Capture and Assign POST variables to Args Array
      $args = [];
      $args['name'] = $_POST['name'];
      $args['email'] = $_POST['email'];
      $args['phoneNumber'] = $_POST['phoneNumber'];
      $args['qualifications'] = $_POST['qualifications'];
      $args['subjectsToTeach'] = $_POST['subjectsToTeach'];
      $args['ratePerHour'] = $_POST['ratePerHour'];

      // Construct new Tutor Object
      $tutor = new Tutor;
      $tutor->name = $args['name'];
      $tutor->email = $args['email'];
      $tutor->phoneNumber = $args['phoneNumber'];
      $tutor->qualifications = $args['qualifications'];
      $tutor->subjectsToTeach = $args['subjectsToTeach'];
      $tutor->ratePerHour = $args['ratePerHour'];

      // New Tutor Object to DB
      $results = $tutor->create();

      // Success Message
      if ($results) {
        echo "<h4>New Vehicle Added Successfully</h4>";

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
      echo "<h4>Fill in ALL the following details.</h4>";
      echo "<h5>Items marked with *** are numerical fields.</h5>";
      echo "<form action='add.php' method='POST'>";
      echo "<table>";
  
      echo "<tr>";
      echo "<td class='left'><label for='name'>Name </label></td>";
      echo "<td><input type='text' name='name' id='name' placeholder='Eg: John Doe' required></td>";
      echo "</tr>";
  
      echo "<tr>";
      echo "<td class='left'><label for='email'>Phone Number </label></td>";
      echo "<td><input type='email' name='email' id='email' placeholder='Eg: john.doe@example.com' required></td>";
      echo "</tr>";
      
      echo "<tr>";
      echo "<td class='left'><label for='phoneNumber'>Phone Number </label></td>";
      echo "<td><input type='text' name='phoneNumber' id='phoneNumber' placeholder='Eg: 411909' required></td>";
      echo "</tr>";
  
      echo "<tr>";
      echo "<td class='left'><label for='qualifications'>Qualifications </label></td>";
      echo "<td><textarea name='qualifications' id='qualifications' placeholder='Eg: BSc Computer Science, BA Art' required></textarea></td>";
      echo "</tr>";
  
      echo "<tr>";
      echo "<td class='left'><label for='subjectsToTeach'>Subjects to Teach </label></td>";
      echo "<td><textarea name='subjectsToTeach' id='subjectsToTeach' placeholder='Eg: Programming Databases , History Sociology' required></textarea></td>";
      echo "</tr>";
  
      echo "<tr>";
      echo "<td class='left'><label for='ratePerHour'>Rate Per Hour*** </label></td>";
      echo "<td><input type='number' name='ratePerHour' id='ratePerHour' placeholder='Eg: 45' required></td>";
      echo "</tr>";
  
      echo "</table>";
      echo "<br>";
      echo "<input type='submit' value='Add New Tutor'>";
      echo "</form>";
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