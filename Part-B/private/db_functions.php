<?php
require_once('db_credentials.php');  // Importing the Database Connections
function connect_DB(){  // Defining the Database Connect Function
  $database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  // DEBUG: Check Database Connectivity
  /*if ($database->connect_errno == 0) {
    echo "DB Connected Successfully";
  } else {
    echo "An Error Occurred during the Database Connection";
  }*/ 
}
?>