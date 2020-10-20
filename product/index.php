<?php

require_once("db.php");

$products = get_top_products();

include("header.php");
?>

<p>
  <ul>
<?php



foreach ($products as $product) {
  echo "<div class='view'><li>" . htmlentities($product['name']) . "</li></div>";
}
?>
  </ul>
</p>
<div>

<?php require_once("footer.php");
?>
