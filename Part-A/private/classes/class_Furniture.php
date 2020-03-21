<?php
require_once('class_Auction_Item.php');
// Subclass for Furniture Items
class Furniture extends Auction_Item {
  public $dimensions; // Dimensions for Furniture

  public function __construct($dimensions, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->dimensions = $dimensions;
  }
}
?>