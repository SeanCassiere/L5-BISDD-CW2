<?php
require_once('class_database.php');
class Tutor extends Database {
  // DB Table Details
  public static $table_name="tutor";
	protected static $db_columns = ['id', 'name', 'email', 'phoneNumber', 'qualifications', 'subjectsToTeach', 'ratePerHour'];
  // + Attr(s)
  public $id;
  public $name;
  public $email;
  public $phoneNumber;
  public $qualifications;
  public $subjectsToTeach;
  public $ratePerHour;
}
?>