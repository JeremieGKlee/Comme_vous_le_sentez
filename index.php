<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Table de multiplication</title>
    </head>
    <body>
    <?php

        $number = 2;
        for($i = 1;$i <12; $i++){
            echo
                "<p>", $number,
                " &times; ",$i,
                " = ", $number*$i,
                "</p>";
        }
    ?>    
    </body>
    </html>
