<?php
function calculate_cost(
    float|int $unit_cost,
    float|int $quantity,
    float|int $discount = 0,
    float|int $tax = 20,
): float {
    $gross_cost = $unit_cost * $quantity;
    $tax = $gross_cost * ($tax / 100);
    return ($gross_cost + $tax) - $discount;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Named Arguments in PHP 8</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <p>Dark Chocolate
            $<?= calculate_cost(quantity: 10, unit_cost: 5, tax: 5, discount: 2) ?>
        </p>
        <p>Milk Chocolate
            $<?= calculate_cost(quantity: 10, unit_cost: 5, tax: 5) ?></p>
        <p>White Chocolate
            $<?= calculate_cost(unit_cost: 5, quantity: 10, tax: 5) ?></p>
    </body>

</html>
