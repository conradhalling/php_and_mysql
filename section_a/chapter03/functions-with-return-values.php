<?php
function create_logo(): string
{
    return '<img src="img/logo.png" alt="Logo">';
}

function create_copyright_notice(): string
{
    $year = date(format: 'Y');
    $message = "&copy; $year";
    return $message;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Functions with Return Values</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <header>
            <h1><?= create_logo() ?>The Candy Store</h1>
        </header>
        <article>
            <h2>Welcome to the Candy Store</h2>
        </article>
        <footer>
            <?= create_logo() ?>
            <?= create_copyright_notice() ?>
        </footer>

    </body>

</html>
