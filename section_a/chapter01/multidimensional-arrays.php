<?php
$offers = [
  ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
  ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
  ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
];
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>

  <body>
    <h1>The Candy Store</h1>
    <h2>Offers</h2>
    <p><?php echo $offers[0]['name']; ?> -
      <?php echo $offers[0]['price']; ?>
    </p>
    <p><?php echo $offers[1]['name']; ?> -
      <?php echo $offers[1]['price']; ?>
    </p>
    <p><?php echo $offers[2]['name']; ?> -
      <?php echo $offers[2]['price']; ?>
    </p>
  </body>

</html>
