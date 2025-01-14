<?php
declare(strict_types=1);

function calculate_cost(
    int|float $unit_cost,
    int|float $quantity,
    int|float $discount = 0
): float {
    $gross_cost = $unit_cost * $quantity;
    return $gross_cost - $discount;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Default Values for Parameters</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolate</h2>
        <p>Dark Chocolate
            $<?= calculate_cost(unit_cost: 5, quantity: 10, discount: 5) ?></p>
        <p>Milk Chocolate $<?= calculate_cost(unit_cost: 3, quantity: 4) ?></p>
        <p>White Chocolate
            $<?= calculate_cost(unit_cost: 4, quantity: 15, discount: 20) ?></p>
    </body>

</html>
