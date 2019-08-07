<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="associativeArray.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php 
        //Names are the keys and grades are the values
            $grades = array("Nic"=>"A+", "Ace"=>"B-", "Tom"=>"A");
            $grades["Ace"] = "A";
            // echo $grades["Nic"];
            // echo count($grades);
            echo $grades[$_POST["student"]];
        ?>
    </body>
</html>
