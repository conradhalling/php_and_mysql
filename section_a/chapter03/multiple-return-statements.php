<?php
declare(strict_types=1);
$stock = 25;

function get_stock_message(int $stock): string
{
    if ($stock >= 10) {
        return 'Good availability';
    }
    if (($stock > 0) && ($stock < 10)) {
        return 'Low stock';
    }
    return 'Out of stock';
}

$message = get_stock_message(stock: $stock);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Multiple Return Statements</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Chocolates</h2>
        <p><?= $message ?></p>
    </body>

</html>
