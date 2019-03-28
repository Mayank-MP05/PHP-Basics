<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Functions</title>
</head>
<body>
    <?php

        //Simple Function to Say Hello
        function SayHello(){
            echo "Hello This is PHP Buddy Cool";
        }

        //user input from Function
        function hello($user){
            echo "Hello ".$user;
        }

        //Power Function
        function power($x,$y){
            $ans = 1;
            for($i = 0;$i < $y ;$i++){
                $ans = $ans * $x;
            }
            return $ans;
        }
    ?>

    <?php
        SayHello();
        echo '<br>';
        hello("Mayank");
        echo '<br>';
        echo power(7,2);
        echo '<br>';
    ?>
</body>
</html>
