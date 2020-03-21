<?php
require_once('class_Auction_Item.php');
// Subclass for Book Items
class Book extends Auction_Item {
  public $author;
  public $title;
}
?>