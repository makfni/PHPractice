<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="calculatorV2.php" method="post">
            First Num: <input type="number" step="0.0001" name="num1"><br>
            Operation: <input type="text" name="op"><br>
            Second Num: <input type="number" step="0.0001" name="num2"><br>
            <input type="submit">
        </form>
        <?php 
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if($op == "+"){
                echo $num1 + $num2;
            } elseif ($op == "-") {
                echo $num1 - $num2;
            } elseif ($op == "/") {
                echo $num1 / $num2;
            } elseif ($op == "*") {
                echo $num1 * $num2;
            } else {
                echo "Invalid Operator";
            }
        ?>
    </body>
</html>
