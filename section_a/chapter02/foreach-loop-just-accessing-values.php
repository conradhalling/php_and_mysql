<?php
$best_sellers = ['Toffee', 'Mints', 'Fudge',];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>foreach Loop - Just Accessing Values</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>The Candy Store</h1>
        <h2>Best Sellers</h2>
        <?php foreach ($best_sellers as $product) { ?>
            <p><?= $product ?></p>
        <?php } ?>
    </body>

</html>
