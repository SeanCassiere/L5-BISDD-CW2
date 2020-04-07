<?php
require_once('../private/initialise.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Part A - W1715755 | 2016074</title>
  <style>.push-left{ margin-left: 1rem; } span {display: block;}</style>
</head>
<body>
  <h1>BIS Design & Development Module<br>Coursework Submission - W1715755 | 2016074</h1>
  <hr>
  
  <?php
  /* Task 2 */
  $furn_coffeeTable = new Furniture("85 cm X 35 cm X 52", 1 , "Peter", "Furniture", "Coffee table", 85, "31/03/2020", 60);
  $book_playDrama = new Book("William Shakespeare", "Macbeth", 2 , "Ann", "Book", "Play drama", 15, "31/03/2020", 7);
  $paint_oilOnCanvas = new Painting("Hannah Fairfield",  1839, 1800, 3 , "Helen ", "Painting", "Oil on Canvas", 3000, "30/04/2020", 850);
  $paint_popArt = new Painting("Callypso",  2015, 85, 4 , "John ", "Painting", "Pop Art", 400, "30/04/2020", 420);
  $paint_spanishSchool = new Painting("Goya",  1800, 9500, 5 , "Wendy ", "Painting", "Spanish School", 15000, "30/04/2020", 10000);
  ?>

  <!-- Case 1 -->
  <h2>Case 1</h2>
  <h4>1. $furn_coffeeTable - <?php echo $furn_coffeeTable->get_type(); ?></h4>
  <p class='push-left'>
    Product ID = <b><?php echo $furn_coffeeTable->get_id(); ?></b>.<br>
    Seller is <b><?php echo $furn_coffeeTable->get_seller(); ?></b>.<br>
    Asking Price = <b>&pound;<?php echo $furn_coffeeTable->get_askingPrice(); ?></b>.<br>
    Buyer's Additional Premium = <b>&pound;<?php echo $furn_coffeeTable->calculate_buyer_premium(); ?></b>.<br>
    <span class="push-left">
      Net Price Buyer Pays = <b>&pound;<?php echo $furn_coffeeTable->calculate_selling_price(); ?></b>.
    </span>
    Net Value Seller will receive = <b>&pound;<?php echo $furn_coffeeTable->calculate_seller_earnings(); ?></b>.</span><br>
    Auction site Profit = <b>&pound;<?php echo $furn_coffeeTable->calculate_site_profit(); ?></b>.</span><br>
  </p>

  <h4>2. $book_playDrama - <?php echo $book_playDrama->get_type(); ?></h4>
  <p class='push-left'>
    Product ID = <b><?php echo $book_playDrama->get_id(); ?></b>.<br>
    Seller is <b><?php echo $book_playDrama->get_seller(); ?></b>.<br>
    Asking Price = <b>&pound;<?php echo $book_playDrama->get_askingPrice(); ?></b>.<br>
    Buyer's Additional Premium = <b>&pound;<?php echo $book_playDrama->calculate_buyer_premium(); ?></b>.<br>
    <span class="push-left">
      Net Price Buyer Pays = <b>&pound;<?php echo $book_playDrama->calculate_selling_price(); ?></b>.
    </span>
    Net Value Seller will receive = <b>&pound;<?php echo $book_playDrama->calculate_seller_earnings(); ?></b>.</span><br>
    Auction site Profit = <b>&pound;<?php echo $book_playDrama->calculate_site_profit(); ?></b>.</span><br>
  </p>

  <h4>3. $paint_oilOnCanvas - <?php echo $paint_oilOnCanvas->get_type(); ?></h4>
  <p class='push-left'>
    Product ID = <b><?php echo $paint_oilOnCanvas->get_id(); ?></b>.<br>
    Seller is <b><?php echo $paint_oilOnCanvas->get_seller(); ?></b>.<br>
    Asking Price = <b>&pound;<?php echo $paint_oilOnCanvas->get_askingPrice(); ?></b>.<br>
    Buyer's Additional Premium = <b>&pound;<?php echo $paint_oilOnCanvas->calculate_buyer_premium(); ?></b>.<br>
    <span class="push-left">
      Net Price Buyer Pays = <b>&pound;<?php echo $paint_oilOnCanvas->calculate_selling_price(); ?></b>.
    </span>
    Net Value Seller will receive = <b>&pound;<?php echo $paint_oilOnCanvas->calculate_seller_earnings(); ?></b>.</span><br>
    Auction site Profit = <b>&pound;<?php echo $paint_oilOnCanvas->calculate_site_profit(); ?></b>.</span><br>
  </p>

  <h4>4. $paint_popArt - <?php echo $paint_popArt->get_type(); ?></h4>
  <p class='push-left'>
    Product ID = <b><?php echo $paint_popArt->get_id(); ?></b>.<br>
    Seller is <b><?php echo $paint_popArt->get_seller(); ?></b>.<br>
    Asking Price = <b>&pound;<?php echo $paint_popArt->get_askingPrice(); ?></b><br>
    Buyer's Additional Premium = <b>&pound;<?php echo $paint_popArt->calculate_buyer_premium(); ?></b>.<br>
    <span class="push-left">
      Net Price Buyer Pays = <b>&pound;<?php echo $paint_popArt->calculate_selling_price(); ?></b>.
    </span>
    Net Value Seller will receive = <b>&pound;<?php echo $paint_popArt->calculate_seller_earnings(); ?></b>.</span><br>
    Auction site Profit = <b>&pound;<?php echo $paint_popArt->calculate_site_profit(); ?></b>.</span><br>
  </p>

  <h4>5. $paint_spanishSchool - <?php echo $paint_spanishSchool->get_type(); ?></h4>
  <p class='push-left'>
    Product ID = <b><?php echo $paint_spanishSchool->get_id(); ?></b>.<br>
    Seller is <b><?php echo $paint_spanishSchool->get_seller(); ?></b>.<br>
    Asking Price = <b>&pound;<?php echo $paint_spanishSchool->get_askingPrice(); ?></b><br>
    Buyer's Additional Premium = <b>&pound;<?php echo $paint_spanishSchool->calculate_buyer_premium(); ?></b>.<br>
    <span class="push-left">
      Net Price Buyer Pays = <b>&pound;<?php echo $paint_spanishSchool->calculate_selling_price(); ?></b>.
    </span>
    Net Value Seller will receive = <b>&pound;<?php echo $paint_spanishSchool->calculate_seller_earnings(); ?></b>.</span><br>
    Auction site Profit = <b>&pound;<?php echo $paint_spanishSchool->calculate_site_profit(); ?></b>.</span><br>
  </p>

  <hr>
  <!-- Case 2 -->
  <h2>Case 2</h2>
  <?php
  /* Case 2 */
  echo "<h4>3. \$paint_oilOnCanvas </h4>";
  echo "<p class='push-left'>"; $paint_oilOnCanvas->saleState(); echo "</p>";
  echo "<h4>4. \$paint_popArt </h4>";
  echo "<p class='push-left'>"; $paint_popArt->saleState(); echo "</p>";
  echo "<h4>5. \$paint_spanishSchool </h4>";
  echo "<p class='push-left'>"; $paint_spanishSchool->saleState(); echo "</p>";
  ?>
  <hr>
  <!-- Case 3 -->
  <h2>Case 3</h2>
  <?php
  /* Case 3 */
  echo "<h4>1. \$furn_coffeeTable </h4>";
  $furn_coffeeTable->add_bid_history('25 January 2020', 20);
  $furn_coffeeTable->add_bid_history('31 January 2020', 28);
  $furn_coffeeTable->add_bid_history('01 February 2020', 35);
  $furn_coffeeTable->add_bid_history('10 February 2020', 45);
  $furn_coffeeTable->add_bid_history('12 February 2020', 60);
  echo "<p class='push-left'>"; $furn_coffeeTable->view_bid_history(); echo "</p>"; // View Bid History for $furn_coffeeTable 
  
  echo "<h4>3. \$paint_oilOnCanvas </h4>";
  $paint_oilOnCanvas->add_bid_history('20 January 2020', 550);
  $paint_oilOnCanvas->add_bid_history('27 January 2020', 600);
  $paint_oilOnCanvas->add_bid_history('15 February 2020', 850);
  echo "<p class='push-left'>"; $paint_oilOnCanvas->view_bid_history(); echo "</p>"; // View Bid History for $furn_coffeeTable
  ?>
</body>
</html>