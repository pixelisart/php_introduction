<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Introduction to PHP</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,900&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Up & Running with PHP</h1>

            <div class="code-content">
                <?php
                    $fruits = array('apple', 'orange', 'melon', 'banana');
                    //$fruites = [];

                    echo $fruits; // Outputs: Array
                    echo "<hr>";
                    echo $fruits[2];

                    array_push($fruits, 'pear'); // Add item to the array
                    echo "<hr>";
                    echo $fruits[4];

                    unset($fruits[1]);  // Remove item from the array.

                    echo "<hr>";
                    echo "<pre>";

                    var_dump($fruits);
                    echo "<pre>";
                    echo "<hr>";
                    echo $fruits[1];
                ?>
            </div>
        </div>
    </body>
</html>
