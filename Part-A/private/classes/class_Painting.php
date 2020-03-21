<?php
require_once('class_Auction_Item.php');
// Subclass for Painting Items
class Painting extends Auction_Item {
  public $painter;
  public $year;
  private $reservedPrice;

  public function __construct($painter, $year, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->painter = $painter;
    $this->year = $year;
  }
}
?>