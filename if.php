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

            // function main(){
                $isMale = true;
                $isTall = true;
                if($isMale && $isTall){
                    echo "is male and tall";
                }else if(!$isMale || $isTall) {
                    echo "is not female or tall";
                }
            // }
            // main();
        ?>
    </body>
</html>
