<?php
require_once('class_Auction_Item.php');
// Subclass for Painting Items
class Painting extends Auction_Item {
  // - Attr
  private $painter;
  private $year;
  private $reservedPrice;

  #Set-Get Pairs
  public function set_painter( $painter ) { $this->painter = $painter; }
  public function get_painter() { return $this->painter; }

  public function set_year( $year ) { $this->year = $year; }
  public function get_year() { return $this->year; }

  public function set_reservePrice( $price ) { $this->reservedPrice = $price; }
  public function get_reservePrice() { return $this->reservedPrice; }
  
  // + Methods
  public function __construct($painter, $year, $reserve, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->painter = $painter;
    $this->year = $year;
    $this->reservedPrice = $reserve;
  }

  public function saleState() { if ( $this->reservedPrice < $this->get_currentBid() ) { echo "Painting '".$this->get_description()."' WILL be Sold."; } else { echo "Painting '".$this->get_description()."' will NOT be Sold."; } }  
}
?>