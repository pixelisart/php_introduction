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
                    $fruits = array('apple', 'orange', 'melon', 'banana', 'pear');
                    echo $fruits[0] . "<br />";
                    echo $fruits[1] . "<br />";
                    echo $fruits[2] . "<br />";
                    echo $fruits[3] . "<br />";
                    echo $fruits[4];

                    echo "<br /><br />";
                    
                    foreach($fruits as $fruit){
                        echo $fruit . "<br />";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
