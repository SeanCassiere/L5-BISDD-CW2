<?php
//Parent Class for ALL Auction Items

class Auction_Item {
  public $id; // ID per Item
  public $seller; // Seller Name
  public $type; // Type of Item
  public $description; // Item Description
  public $askingPrice; //Item Asking Price
  public $closingDate; // Item Closing Date
  public $currentBid; // Current big on the Item

  // Specialized construct method to require & assign attributes at initiation
  public function __construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid){
    $this->id = $id;
    $this->seller = $seller;
    $this->type = $type;
    $this->description = $description;
    $this->askingPrice = $askingPrice;
    $this->closingDate = $closingDate;
    $this->currentBid = $currentBid;
  }
}

// Subclass for Furniture Items
class Furniture extends Auction_Item {
  public $dimensions;
}

// Subclass for Book Items
class Book extends Auction_Item {
  public $author;
  public $title;
}

// Subclass for Painting Items
class Painting extends Auction_Item {
  public $painter;
  public $year;
}

?>