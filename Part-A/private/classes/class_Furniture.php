<?php
require_once('class_Auction_Item.php');
// Subclass for Furniture Items
class Furniture extends Auction_Item {
  // - Attr
  private $dimensions; // Dimensions for Furniture

  #Set-Get Pairs
  public function set_dimensions( $dimensions ) { $this->dimensions = $dimensions; }
  public function get_dimensions() { return $this->dimensions; }
  
  // + Methods
  public function __construct($dimensions, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->dimensions = $dimensions;
  }
}
?>