<?php
declare(strict_types=1);

$price = 4;
$quantity = 3;

function calculate_total(int|float $price, int|float $quantity): float
{
    return $price * $quantity;
}

$total = calculate_total(price: $price, quantity: $quantity);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Strict Types</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <p>Total $<?= $total ?></p>
    </body>

</html>
