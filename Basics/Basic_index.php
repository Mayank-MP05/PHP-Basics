<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basics Of PHP</title>
    <style>
        *{
            margin:0;
            padding:0;
            text-align:center;
        }
        #html_h2{
            background-color:black;
            color:white;
            width:100%;
            height:75px;
        }
    </style>
</head>
<body>
    <h2 id="html_h2">Real Basics of PHP </h2>
    <?php
        //Printing Text to Screen
        echo("<h2>Mumbai</h2>");
        echo("Mumbai (formerly called Bombay) is a densely populated city on India’s west coast. A financial center, it's India's largest city. On the Mumbai Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. The city's also famous as the heart of the Bollywood film industry.");
        echo("<hr>");
        echo("<h2>Pune</h2>");
        echo("Pune is a sprawling city in the western Indian state of Maharashtra. It was once the base of the Peshwas (prime ministers) of the Maratha Empire, which lasted from 1674 to 1818. It's known for the grand Aga Khan Palace, built in 1892 and now a memorial to Mahatma Gandhi, whose ashes are preserved in the garden. The 8th-century Pataleshwar Cave Temple is dedicated to the Hindu god Shiva.");
        echo("<hr>");
        echo("<h2>Delhi</h2>");
        echo("Delhi, India’s capital territory, is a massive metropolitan area in the country’s north. In Old Delhi, a neighborhood dating to the 1600s, stands the imposing Mughal-era Red Fort, a symbol of India, and the sprawling Jama Masjid mosque, whose courtyard accommodates 25,000 people. Nearby is Chandni Chowk, a vibrant bazaar filled with food carts, sweets shops and spice stalls.");
        echo("<hr><br>");
    ?>
    <?php
        // PHP Variables
        $name = "Mayank";
        $fname = "Devendra";
        $sname = "Pachpande";
        $age = 20;
   
        echo("My name is $name  $fname  $sname  I am $age years old.");
        echo("My name is $name  $fname  $sname  I am $age years old.");
        echo("<hr><br>");
    ?>

    <?php
        //Data Types in PHP
        $string = "This is PHP String";
        $age = 45;
        $hsc_cgpa = 8.35;
        $bool = true;
        $error = NULL;

        echo "<h3>Different Data Types</h3><br>";
        echo "$string is String Data Types in PHP <br> $age is a Number or Integer Data Type <br>";
        echo "$hsc_cgpa is Floating Point Number <br> $bool is a Boolean Value of this type<br>";
        echo "Printing Null is like $error";
        echo("<hr><br>");
    ?>

    <?php
        //String Functions.

        echo "<h3>String Functions</h3>";
        $sample = "This is the Sample String";
        echo "Real string is $sample";
        echo("<br>");

        //strtolower function
        $sample = strtolower($sample);
        echo "After Strtolower() function String becomes :-> $sample"; 
        echo("<br>");

        //strtoupper function
        $sample = strtoupper($sample);
        echo "After Strtolower() function String becomes :-> $sample"; 
        echo("<br>");

        //str_replace function
        $sample = str_replace("SAMPLE","Demo",$sample);
        echo "After Str_replace() function String becomes :-> $sample"; 
        echo("<br>");
        echo("<hr><br>");

        
    ?>
</body>
</html>