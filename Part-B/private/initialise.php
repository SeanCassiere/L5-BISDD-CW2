<?php
require_once('classes/class_tutors.php'); // Importing Tutor Class
require_once('db_credentials.php');  // Importing the Database Connections
require_once('db_functions.php');  // Importing the Database-Connection Functions

$database = connect_DB(); // Create DB Object

//validate_DB_connection($database); // Database Connection Check

Tutor::set_database($database); // Setting DB to Class
?>