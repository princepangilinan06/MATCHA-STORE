<?php
    $stock = 5;
    $ordered= 3;

$matchaStrawberryStocks= 0;
$matchaLatteStocks= 0;
$matchaCaramelStocks= 0;
$matchaChocolateStocks= 2;
$matchaPureeStocks= 0;
$matchaFrappeStocks= 1;


$orderedStrawberry = 2;
if ($matchaStrawberryStocks > 0){
    $matchaSstock = "In Stock";
}
elseif ($orderedStrawberry > 0){
    $matchaSstock = "Coming Soon!";
}
else{
    $matchaSstock = "Sold Out!";
}


$orderedLatte = 0;
if ($matchaLatteStocks > 0){
    $matchaLstock = "In Stock";
}
elseif ($orderedLatte > 0){
    $matchaLstock = "Coming Soon!";
}
else{
    $matchaLstock = "Sold Out!";
}


$orderedCaramel = 0;
if ($matchaCaramelStocks > 0){
    $matchaCstock = "In Stock";
}
elseif ($orderedCaramel > 0){
    $matchaCstock = "Coming Soon!";
}
else{
    $matchaCstock = "Sold Out!";
}


$orderedChocolate = 0;
if ($matchaChocolateStocks > 0){
    $matchaCHstock = "In Stock";
}
elseif ($orderedChocolate > 0){
    $matchaCHstock = "Coming Soon!";
}
else{
    $matchaCHstock = "Sold Out!";
}


$orderedPuree = 0;
if ($matchaPureeStocks > 0){
    $matchaPstock = "In Stock";
}
elseif ($orderedPuree > 0){
    $matchaPstock = "Coming Soon!";
}
else{
    $matchaPstock = "Sold Out!";
}


$orderedFrappe = 0;
if ($matchaFrappeStocks > 0){
    $matchaFstock = "In Stock";
}
elseif ($orderedFrappe > 0){
    $matchaFstock = "Coming Soon!";
}
else{
    $matchaFstock = "Sold Out!";
}
?>

<!DOCTYPE html>
<html>
      <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Matcha Stock</h2>
        <p>Matcha Strawberry: <?= $matchaSstock ?></p>

         <p>Matcha Latte: <?= $matchaLstock ?></p>

          <p>Matcha Caramel: <?= $matchaCstock ?></p>

           <p>Matcha Chocolate: <?= $matchaCHstock ?></p>

            <p>Matcha Puree: <?= $matchaPstock ?></p>

             <p>Matcha Frappe: <?= $matchaFstock ?></p>



    
       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>