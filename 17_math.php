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
            <div class="code-content">
                <?php
                    //echo 2 + 2;
                    //echo "<br /><br />";
                    //echo 2 * 3;

                    // FizzBuzz 
                    // Checks current number
                    // If number is divisible by 3, prints Fizz, otherwise, Buzz.
                    for($i = 0; $i <= 100; $i++){
                        if($i % 5 == 0 && $i % 3 == 0){
                            echo $i . " FIZZBUZZ <br />";
                        } else if ($i % 3 == 0){
                            echo $i . "FIZZ <br />";
                        } else if($i % 5 == 0) {
                            echo $i . "BUZZ <br />";
                        } else {
                            echo $i . "<br />";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
