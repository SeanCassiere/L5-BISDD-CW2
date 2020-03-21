<?php
class Database {
  protected static $database;
	protected static $table_name = "";	
	protected static $columns;

  public static function set_database( $db ){ self::$database = $db; }
  
  public static function find_all() { $sql = "SELECT * FROM ".static::$table_name.";"; return static::find_by_sql($sql); }

  public static function find_by_id( $id ) {
    $sql = "SELECT * FROM ".static::$table_name." WHERE ".static::$db_columns[0]."=" . static::$database->escape_string( $id ) . ";";
    $result = static::find_by_sql( $sql );
    if (!empty($result)) { return array_shift($result); } else { return NULL; }
  }

  public static function find_by_sql( $sql ) {
    $created_objects = [];
    $results = self::$database->query($sql);
    while ( $row = $results->fetch_assoc() ) { $created_objects[] = static::instantiate($row); }
    return $created_objects;
  }

  public function attributes() {
		$attributes=[];
		foreach( static::$db_columns as $column ) {
			if($column == 'id') { continue; }
			$attributes[$column] = $this->$column;
		}
	return $attributes;
	}

  public function create() {
    $attributes = $this->attributes();
    $sql = "INSERT INTO ".static::$table_name." (";
    $sql .= join(',', array_keys($attributes));
    $sql .= ") VALUES ('";
    $sql .= join("', '", array_values($attributes));
    $sql .= "')";
    $results = static::$database->query($sql);
    if ($results) { $this->id = static::$database->insert_id; }
    return $results;
  }

  public function update() {
    $attributes = $this->attributes();
    $attribute_pairs = [];
    foreach ( $attributes as $key=>$value ) { $attribute_pairs[] = "{$key}='{$value}'"; }
    $sql = "UPDATE ".static::$table_name." SET ";
    $sql .= join(',', $attribute_pairs);
    $sql .= "WHERE ".static::$db_columns[0]."='".self::$database->escape_string($this->id)."'";
    $results = static::$database->query($sql);
    return $results;
  }

  public function delete() {
    $sql = "DELETE FROM ".static::$table_name." WHERE ".static::$db_columns[0]."='".$this->id."' LIMIT 1";
    $results = static::$database->query($sql);
    return $results;
  }

  protected static function instantiate( $record ) {
    $object = new static;
    foreach ($record as $property => $value) { if ( property_exists($object, $property) ) { $object->$property=$value; } }
    return $object;
  }

  public function merge_attributes( $args=[] ) {
    foreach ( $args as $key=>$value ) { if ( property_exists($this, $key) ) { $this->$key = $value; } }
  }
}
?>