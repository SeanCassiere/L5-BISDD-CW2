<?php
//Parent Class for ALL Auction Items
class Auction_Item {
  // - Attr
  private $id; // ID per Item
  private $seller; // Seller Name
  private $type; // Type of Item
  private $description; // Item Description
  private $askingPrice; //Item Asking Price
  private $closingDate; // Item Closing Date
  private $currentBid; // Current big on the Item
  
  // # Attr
  protected $bid_history = [];
  
  // # Static Attr
  protected static $seller_premium=10;

  #Set-Get Pairs
  public function set_id( $id ) { $this->id = $id; }
  public function get_id() { return $this->id; }

  public function set_seller( $seller ) { $this->seller = $seller; }
  public function get_seller() { return $this->seller; }

  public function set_type( $type ) { $this->type = $type; }
  public function get_type() { return $this->type; }
  
  public function set_description( $description ) { $this->description = $description; }
  public function get_description() { return $this->description; }
  
  public function set_askingPrice( $askingPrice ) { $this->askingPrice = $askingPrice; }
  public function get_askingPrice() { return $this->askingPrice; }
  
  public function set_closingDate( $closingDate ) { $this->closingDate = $closingDate; }
  public function get_closingDate() { return $this->closingDate; }
  
  public function set_currentBid( $currentBid ) { $this->currentBid = $currentBid; }
  public function get_currentBid() { return $this->currentBid; }

  // + Methods
  # Specialized construct method to require & assign attributes at initiation
  public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid){
    $this->id = $id;
    $this->seller = $seller;
    $this->type = $type;
    $this->description = $description;
    $this->askingPrice = $askingPrice;
    $this->closingDate = $closingDate;
    $this->currentBid = $currentBid;
  }
  # Adding to the # Bid History attr 
  public function add_bid_history($date, $bid) { $this->bid_history[$date] = $bid; }
  # Displaying # Bid History Attr in a presentable manner
  public function view_bid_history() { 
    if (!empty($this->bid_history)) {
      echo "For item number ".$this->id.", the following bids are made: <br>";
      foreach ($this->bid_history as $date=>$bid) { echo "Date: ". $date .", Bid: <b>&pound;". $bid . ".</b><br>"; }
    } else { echo "Item number ".$this->id." has NO bid history set."; }
  }
  # Logic Based Calculations
  public function calculate_buyer_premium() { return $this->askingPrice*0.1; }
  public function calculate_selling_price() { return $this->askingPrice + $this->calculate_buyer_premium(); }
  public function calculate_seller_earnings() { return $this->askingPrice - self::$seller_premium; }
  public function calculate_site_profit() { return $this->calculate_buyer_premium() + self::$seller_premium; }
}
?>