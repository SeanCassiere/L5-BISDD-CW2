<?php
require_once('../private/initialise.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Part A - W1715755 | 2016074</title>
  <style>.push-left{ margin-left: 1rem; }</style>
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
  //echo "<pre>"; print_r($furn_coffeeTable); echo "</pre>"; echo "<pre>"; print_r($book_playDrama); echo "</pre>"; echo "<pre>"; print_r($paint_oilOnCanvas); echo "</pre>"; echo "<pre>"; print_r($paint_popArt); echo "</pre>"; echo "<pre>"; print_r($paint_spanishSchool); echo "</pre>";
  ?>
  <h2>Case 1</h2>
  <?php
  /* Case 1 */
  echo "<h4>\$furn_coffeeTable </h4><p class='push-left'>";
  $furn_coffeeTable->selling_price(); $furn_coffeeTable->seller_earnings(); $furn_coffeeTable->site_profit();
  echo "</p>";

  echo "<h4>\$book_playDrama </h4><p class='push-left'>";
  $book_playDrama->selling_price(); $book_playDrama->seller_earnings(); $book_playDrama->site_profit();
  echo "</p>";

  echo "<h4>\$paint_oilOnCanvas </h4><p class='push-left'>";
  $paint_oilOnCanvas->selling_price(); $paint_oilOnCanvas->seller_earnings(); $paint_oilOnCanvas->site_profit();
  echo "</p>";
  
  echo "<h4>\$paint_popArt </h4><p class='push-left'>";
  $paint_popArt->selling_price(); $paint_popArt->seller_earnings(); $paint_popArt->site_profit();
  echo "</p>";
  
  echo "<h4>\$paint_spanishSchool </h4><p class='push-left'>";
  $paint_spanishSchool->selling_price(); $paint_spanishSchool->seller_earnings(); $paint_spanishSchool->site_profit();
  echo "</p>";
  ?>
  <hr>
  <h2>Case 2</h2>
  <?php
  /* Case 2 */
  echo "<h4>\$paint_oilOnCanvas </h4>";
  echo "<p class='push-left'>"; $paint_oilOnCanvas->saleState(); echo "</p>";
  echo "<h4>\$paint_popArt </h4>";
  echo "<p class='push-left'>"; $paint_popArt->saleState(); echo "</p>";
  echo "<h4>\$paint_spanishSchool </h4>";
  echo "<p class='push-left'>"; $paint_spanishSchool->saleState(); echo "</p>";
  ?>
  <hr>
  <h2>Case 3</h2>
  <?php
  /* Case 3 */
  echo "<h4>\$furn_coffeeTable </h4>";
  $furn_coffeeTable->add_bid_history('25 January 2020', 20);
  $furn_coffeeTable->add_bid_history('31 January 2020', 28);
  $furn_coffeeTable->add_bid_history('01 February 2020', 35);
  $furn_coffeeTable->add_bid_history('10 February 2020', 45);
  $furn_coffeeTable->add_bid_history('12 February 2020', 60);
  echo "<p class='push-left'>"; $furn_coffeeTable->view_bid_history(); echo "</p>"; // View Bid History for $furn_coffeeTable 
  
  echo "<h4>\$paint_oilOnCanvas </h4>";
  $paint_oilOnCanvas->add_bid_history('20 January 2020', 550);
  $paint_oilOnCanvas->add_bid_history('27 January 2020', 600);
  $paint_oilOnCanvas->add_bid_history('15 February 2020', 850);
  echo "<p class='push-left'>"; $paint_oilOnCanvas->view_bid_history(); echo "</p>"; // View Bid History for $furn_coffeeTable
  ?>
</body>
</html>