<?php
$stock = 5;

if ($stock > 0) {
    $message = 'In stock';
} else {
    $message = 'Sold out';
}

$matchaStrawberryStocks= 0;
$matchaLatteStocks= 0;
$matchaCaramelStocks= 0;
$matchaChocolateStocks= 2;
$matchaPureeStocks= 0;
$matchaFrappeStocks= 1;

if ($matchaStrawberryStocks > 0) {
    $matchaSstock = "In Stock";
} else {
    $matchaSstock = "Out of Stock";
}

if ($matchaLatteStocks > 0) {
    $matchaLstock = "In Stock";
} else {
    $matchaLstock = "Out of Stock";
}

if ($matchaCaramelStocks > 0) {
    $matchaCstock = "In Stock";
} else {
    $matchaCstock = "Out of Stock";
}

if ($matchaChocolateStocks > 0) {
    $matchaCHstock = "In Stock";
} else {
    $matchaCHstock = "Out of Stock";
}

if ($matchaPureeStocks > 0) {
    $matchaPstock = "In Stock";
} else {
    $matchaPstock = "Out of Stock";
}

if ($matchaFrappeStocks > 0) {
    $matchaFstock = "In Stock";
} else {
    $matchaFstock = "Out of Stock";
}

?>

<!DOCTYPE html>
<html>
     <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Matcha Drinks</h2>
        <p><?= $message ?></p>

         <p>Matcha Strawberry: <?= $matchaSstock ?></p>

         <p>Matcha Latte: <?= $matchaLstock ?></p>

          <p>Matcha Caramel: <?= $matchaCstock ?></p>

           <p>Matcha Chocolate: <?= $matchaCHstock ?></p>

            <p>Matcha Puree: <?= $matchaPstock ?></p>

             <p>Matcha Frappe: <?= $matchaFstock ?></p>

       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>