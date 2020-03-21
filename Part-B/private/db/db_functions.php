<?php
function connect_DB(){  // Defining the Database Connect Function
  $database = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); return $database;
}

function validate_DB_connection($database) {
  if ($database->connect_errno==0) { echo "<p>Connection is Successful!</p>"; } else { echo "<p>Connection NOT established! The error was: <br>".$database->connect_error."</p>"; }
}
?>