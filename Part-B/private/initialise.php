<?php
require_once('classes/class_database.php'); // Importing Database Parent Class
require_once('classes/class_tutors.php'); // Importing Tutor Sub-Class

require_once('db/db_credentials.php');  // Importing the Database Connections
require_once('db/db_functions.php');  // Importing the Database-Connection Functions

$database = connect_DB(); // Create DB Object

//validate_DB_connection($database); // Database Connection Check

Database::set_database($database); // Setting DB to Class
?>