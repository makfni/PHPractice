<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <!-- <form action="checkBoxes.php" method="post">
          
            <input type="submit"> -->
        </form>
        <?php 
            function getMax($num1, $num2, $num3){
                if($num1 >= $num2 && $num1 >= $num3){
                    return $num1;
                } elseif ($num2 >= $num1 && $num2 >= $num3){
                    return $num2;
                } else {
                    return $num3;
                }
            }

            echo getMax(12, 20, 100);
        ?>
    </body>
</html>
