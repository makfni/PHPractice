<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $characterName = "Tom";
            $characterAge = 35;
        //echo allows us to write html onto the html doc
            echo "Si todavia me amas como antes <br>";
            echo "ya nada me parece interesante <br>";
            echo "yo se que en el amor soy un farsante <br>";

            echo "There once was a man named $characterName <br>";
            echo "he was $characterAge years old <br>";
        ?>

        <?php
            $phrase = "To output a string you need to use double parenthesis <br>";
            $age = 30;
            $cost = 19.99;
            $isMale = true;
            //strtolower turns all chars in the string into lowercase
            //strtoupper turns all chars in the string into uppercase 
            //strlen finds the num of chars in string
            echo strtolower($phrase);
            echo strtoupper($phrase);
            echo strlen($phrase);
            echo $phrase[0];
            echo str_replace("output", "input", $phrase);
            echo substr($phrase, 1, 9);
            echo -40.87;
            echo (4+5) * 10;
            $num = 10; 
            $num++;
            echo $num;
            $num = $num + 25;
            echo $num;
            echo sqrt(144);
            echo max(2, 10);
            echo min (2, 10);
            echo round(3.2);
            echo floor(3.9);
        ?>
    </body>
</html>