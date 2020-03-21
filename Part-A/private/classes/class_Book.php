<?php
require_once('class_Auction_Item.php');
// Subclass for Book Items
class Book extends Auction_Item {
  public $author;
  public $title;

  public function __construct($author, $title, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->author = $author;
    $this->title = $title;
  }
}
?>