<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loops</title>
</head>
<body>
    <?php
        for($i = 0;$i < 100;$i++){
            echo "$i <br>";
        }

        $j = 1;

        while($j <= 50){
            echo "This is Row No. $j<br>";
            $j++;
        }

        $k = 80;

        do{
            echo "Print No. $k<br>";
            $k--;
        }while($k > 0)

    ?>
</body>
</html>