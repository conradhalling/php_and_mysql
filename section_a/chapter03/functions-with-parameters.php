<?php
function calculate_total(float $price, float $quantity): float
{
    $cost = $price * $quantity;
    $tax = $cost * (20 / 100);
    $total = $cost + $tax;
    return $total;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions with Parameters</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <p>Mints: $<?= calculate_total(price: 2, quantity: 5) ?></p>
        <p>Toffee: $<?= calculate_total(price: 3, quantity: 5) ?></p>
        <p>Fudge: $<?= calculate_total(price: 5, quantity: 4) ?></p>
    </body>

</html>
