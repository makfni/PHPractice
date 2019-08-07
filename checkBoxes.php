<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="checkBoxes.php" method="post">
           Apples: <input type="checkbox" name="fruits[]" values="apples"><br>
           Mango: <input type="checkbox" name="fruits[]" values="mango"><br>
           Lemon: <input type="checkbox" name="fruits[]" values="lemon"><br>
            <input type="submit">
        </form>
        <?php 
            $fruits = $_POST["fruits"];
            echo $fruits[0];
        ?>
    </body>
</html>
