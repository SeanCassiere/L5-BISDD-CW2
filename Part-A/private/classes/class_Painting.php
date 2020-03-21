<?php
require_once('class_Auction_Item.php');
// Subclass for Painting Items
class Painting extends Auction_Item {
  // + Attr
  public $painter;
  public $year;
  // + Methods
  public function __construct($painter, $year, $reserve, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->painter = $painter;
    $this->year = $year;
    $this->reservedPrice = $reserve;
  }

  public function saleState() {
    if ( $this->reservedPrice < $this->currentBid ) { echo "Painting '".$this->description."' WILL be Sold."; } else { echo "Painting '".$this->description."' will NOT be Sold"; }
  }

  public function set_reservePrice( $price ) { $this->reservedPrice = $price; }
  
  public function get_reservePrice() { return $this->reservedPrice; }
  // - Attr
  private $reservedPrice;
}
?>