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

  /*
  // - Attr(s)
  private $id;
  private $name;
  private $email;
  private $phoneNumber;
  private $qualifications;
  private $subjectsToTeach;
  private $ratePerHour;

  #Set-Get Pairs
  public function set_id( $id ) { $this->id = $id; }
  public function get_id() { return $this->id ; }

  public function set_name( $name ) { $this->name = $name; }
  public function get_name() { return $this->name; }

  public function set_email( $email ) { $this->email = $email; }
  public function get_email() { return $this->email; }

  public function set_phoneNumber( $phoneNumber ) { $this->phoneNumber = $phoneNumber; }
  public function get_phoneNumber() { return $this->phoneNumber; }

  public function set_qualifications( $qualifications ) { $this->qualifications = $qualifications; }
  public function get_qualifications() { return $this->qualifications ; }

  public function set_subjectsToTeach( $subjectsToTeach ) { $this->subjectsToTeach = $subjectsToTeach; }
  public function get_subjectsToTeach() { return $this->subjectsToTeach; }

  public function set_ratePerHour( $ratePerHour ) { $this->ratePerHour = $ratePerHour; }
  public function get_ratePerHour() { return $this->ratePerHour; }
  */
}
?>