<?php
$name = "Prince";
$greeting = "Hello";

if ($name != "")
{
    $greeting= "Welcome back, " . $name;
}

$matchaStrawberryStocks= 5;
$matchaLatteStocks= 3;
$matchaCaramelStocks= 5;
$matchaChocolateStocks= 2;
$matchaPureeStocks= 1;
$matchaFrappeStocks= 1;

if ($matchaStrawberryStocks>0)
{
    $matchaSstock = "In Stock";
}
if ($matchaLatteStocks>0)
{
    $matchaLstock = "In Stock";
}
if ($matchaCaramelStocks>0)
{
    $matchaCstock = "In Stock";
}
if ($matchaChocolateStocks>0)
{
    $matchaCHstock = "In Stock";
}
if ($matchaPureeStocks>0)
{
    $matchaPstock = "In Stock";
}
if ($matchaFrappeStocks>0)
{
    $matchaFstock = "In Stock";
}
?>

<!DOCTYPE html>
<html>
     <?php include_once 'includes/header.php'; ?>
    <body>
        <h2><?= $greeting ?></h2>

        <p>Matcha Strawberry: <?= $matchaSstock ?></p>

         <p>Matcha Latte: <?= $matchaLstock ?></p>

          <p>Matcha Caramel: <?= $matchaCstock ?></p>

           <p>Matcha Chocolate: <?= $matchaCHstock ?></p>

            <p>Matcha Puree: <?= $matchaPstock ?></p>

             <p>Matcha Frappe: <?= $matchaFstock ?></p>

      
    
    
    <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>