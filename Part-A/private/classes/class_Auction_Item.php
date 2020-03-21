<?php
//Parent Class for ALL Auction Items
class Auction_Item {
  // + Attr
  public $id; // ID per Item
  public $seller; // Seller Name
  public $type; // Type of Item
  public $description; // Item Description
  public $askingPrice; //Item Asking Price
  public $closingDate; // Item Closing Date
  public $currentBid; // Current big on the Item
  // # Attr
  protected $buyer_premium;
  // # Static Attr
  protected static $seller_premium=10;
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
    // Calculates The Buyer Premium Value for the Item
    $this->buyer_premium = $this->askingPrice*0.1;
  }

  public function selling_price() { // Selling Price and Info to User
    $total_price = $this->askingPrice + $this->buyer_premium;
    echo "Product ID: ".$this->id."<br>";
    echo "Seller: ".$this->seller."<br>";
    echo "Asking Price: ".$this->askingPrice."<br>";
    echo "Buyer Premium: ".$this->buyer_premium."<br>";
    echo "Total Buyer's Price: ".$total_price."<br>";
  }
  
  public function seller_earnings() { // Seller's Earnings
    $profit = $this->askingPrice - self::$seller_premium;
    echo "Net Value Seller will Receive: ". $profit ."<br>";
  }

  public function site_profit() { // Auction Site Profits
    $profit = $this->buyer_premium + self::$seller_premium;
    echo "Site Profit: ".$profit."<br>";
  }
}
?>