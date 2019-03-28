<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic User Input Form | PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <div class="container">
        <form action="" method="GET">
            <label>Name : </label>
            <input type="text" name="username">
            <br>

            <label>Age :  </label>
            <input type="number" name="uage">
            <br>

            <label>E-mail</label>
            <input type="email" name="umail">
            <br>

            <input type="submit" name="submit" id="submitbtn">
        </form>
    </div>
    <?php
        if(isset($_GET['submit'])){
            $name =  $_GET["username"];
            $age = $_GET["uage"];
            $email = $_GET["umail"];
            echo '<div class="container">';
            echo "Username is $name and He is $age years Old Email is $email";
            echo '</div>';
        }
    ?>
</center> 
</body>
</html>