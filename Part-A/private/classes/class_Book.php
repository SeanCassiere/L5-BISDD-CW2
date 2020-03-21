<?php
require_once('class_Auction_Item.php');
// Subclass for Book Items
class Book extends Auction_Item {
  // + Attr
  public $author;
  public $title;
  // + Methods
  public function __construct($author, $title, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->author = $author;
    $this->title = $title;
  }
}
?>