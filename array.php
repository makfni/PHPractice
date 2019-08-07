<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php 
            $crew = array("Lucas", "Addy", "Brian", "Craig");
            $crew[4] = "Jason";
            echo count($crew);
            for($i = 0; $i < sizeof($crew); $i++){
                echo $crew[$i];
            }
        ?>
    </body>
</html>
