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

                    echo count($fruits); 
                    echo "<br />";

                    $my_name = "Santino Valenzuela";
                    $my_name2 = str_replace(' ', '', $my_name);  // Removes the space in between the name;
                    echo strlen($my_name); // 18 Characters
                    echo "<br />";
                    echo strlen($my_name2);

                    // Transform to uppercase
                    echo "<br />";
                    echo strtoupper($my_name);
                    echo "<br />";
                    echo strtolower($my_name);

                    echo "<br />";
                    echo "<br />";

                    $password = "abcdefg";

                    if(strlen($password) < 6){
                        echo "Password is weak";
                    } else {
                        echo "Password is strong";
                    }
                ?>
            </div>
        </div>
    </body>
</html>
