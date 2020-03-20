<?php
class Tutor {
  // + Static Attr(s)
  public static $database;
  // + Static Method(s)
  public static function set_database( $db ){ self::$database = $db; }
  
  public static function find_all() {
    $sql = "SELECT * FROM tutor;";
    $results_array = self::find_by_sql($sql);
    return $results_array;
  }

  public static function find_by_sql( $sql ) {
    $created_objects = [];
    $results = self::$database->query($sql);
    while ( $row = $results->fetch_assoc() ) { $created_objects[] = self::instantiate($row); }
    return $created_objects;
  }
  // # Static Method(s)
  protected static function instantiate( $record ) {
    $object = new Tutor;
    foreach ($record as $property => $value) {
      if ( property_exists($object, $property) ) { $object->$property=$value; }
    }
    return $object;
  }

  // + Attr(s)
  public $tutorId;
  public $name;
  public $email;
  public $phoneNumber;
  public $qualifications;
  public $subjectsToTeach;
  public $ratePerHour;
  // + Method(s)
}
?>