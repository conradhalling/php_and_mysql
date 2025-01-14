<?php
$tax_rate = 0.2;

function calculate_running_total(float $price, float $quantity): float
{
    global $tax_rate;
    static $running_total = 0;
    $total = $price * $quantity;
    $tax = $total * $tax_rate;
    $running_total = $running_total + $total + $tax;
    return $running_total;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Global and Static Variables</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Running Total</th>
            </tr>
            <tr>
                <td>Mints:</td>
                <td>$2</td>
                <td>5</td>
                <td>$<?= calculate_running_total(price: 2, quantity: 5) ?></td>
            </tr>
            <tr>
                <td>Toffee:</td>
                <td>$3</td>
                <td>5</td>
                <td>$<?= calculate_running_total(price: 3, quantity: 5) ?></td>
            </tr>
            <tr>
                <td>Fudge:</td>
                <td>$5</td>
                <td>4</td>
                <td>$<?= calculate_running_total(price: 5, quantity: 4) ?></td>
            </tr>
        </table>
    </body>

</html>
