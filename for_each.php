<?php
$products = [
    'Matcha Strawberry' => 2.99,
    'Matcha Latte' => 1.99,
    'Matcha Caramel' => 3.49,
    'Matcha Chocolate' => 2.49,
    'Matcha Puree' => 1.49,
    'Matcha Frappe' => 3.99,
];
?>
<!DOCTYPE html>
<html>
     <?php include_once 'includes/header.php'; ?>
    <body>
        <h2>Price List</h2>
        <table>
            <tr>
                <th>Item</th>
                <th>Prices</th>
            </tr>
            <?php foreach ($products as $item => $price) { ?>
                <tr>
                    <td><?= $item ?></td>
                    <td>$<?= $price ?></td>
                </tr>
                <?php } ?>
        </table>
        



    
       <?php include_once 'includes/footer.php'; ?>
    </body>
    
</html>