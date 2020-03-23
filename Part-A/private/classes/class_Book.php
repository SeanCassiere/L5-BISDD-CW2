<?php
require_once('class_Auction_Item.php');
// Subclass for Book Items
class Book extends Auction_Item {
  // - Attr
  private $author;
  private $title;

  #Set-Get Pairs
  public function set_author( $author ) { $this->author = $author; }
  public function get_author() { return $this->author; }

  public function set_title( $title ) { $this->title = $title; }
  public function get_title() { return $this->title; }

  // + Methods
  public function __construct($author, $title, $id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid) {
    parent::__construct($id, $seller, $type, $description, $askingPrice, $closingDate, $currentBid);
    $this->author = $author;
    $this->title = $title;
  }
}
?>