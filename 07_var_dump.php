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
                    $student = array(
                        'first_name' => 'Juan',
                        'last_name' => 'De la torre',
                        'country_name' => 'Mexico',
                        'age' => 21,
                        'user_logged_in' => true
                    );

                    echo "<pre>";
                    var_dump($student);
                    echo "<hr>";
                    print_r($student);
                    echo "<hr>";
                    var_dump($student['country_name']);
                    echo "</pre>";
                ?>
            </div>
        </div>
    </body>
</html>
