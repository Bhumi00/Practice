<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">

        this is my first php executed file or website

        <?php
        echo  "Hey this side prashant setia , writing this using php    "

        ?>


        <?php
        echo  "-----Hello world again";

        // single line comments in php

        /*
        multi 
        line comment
        in 
        php
        */

        // ----------------------------------------------------------------------------
        // variables made using the $ symbol in starting 

        $variable1 = 5;
        $variable2 = 2;

        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;
        echo $variable1 + $variable2;  // not case - sensitive using capital E


        // Arithmatic operators
        echo "<br>";  // we have to use html tags for geting new lines etc.
        echo " the value of vatiable1 + variable2 is : ";
        echo $variable1 + $variable2;
        echo "<br>";

        echo " the value of vatiable1 - variable2 is : ";
        echo $variable1 - $variable2;
        echo "<br>";

        echo " the value of vatiable1 * variable2 is : ";
        echo $variable1 * $variable2;
        echo "<br>";

        echo " the value of vatiable1 / variable2 is : ";
        echo $variable1 / $variable2;
        echo "<br>";


        // Assignment operators 
        $newVar = $variable1;   // = is assignment operator
        echo " The value of newVar = ";
        echo $newVar;

        echo "<br>";
        $newVar = $variable1;   // = is assignment operator
        // $newVar += 1;
        // $newVar -= 1;
        // $newVar *= 2;
        $newVar /= 2;
        echo " The value of newVar = ";
        echo $newVar;



        // Comparisaon operators 
        echo "<h1> Comaparison Operators </h1>";

        echo "The value of 1==4 is : ";
        echo var_dump(1 == 4);
        echo "<br>";

        echo "The value of 1<=4 is : ";
        echo var_dump(1 <= 4);
        echo "<br>";

        echo "The value of 1>=4 is : ";
        echo var_dump(1 >= 4);
        echo "<br>";

        echo "The value of 1!=4 is : ";
        echo var_dump(1 != 4);
        echo "<br>";


        // Increment/Decrement Operators  -- Abhi varible1 ki value 5 hai 
        // echo $variable1++;  // ye abhi 5 return karega or ek baar or print krne pr 6
        // echo $variable1--;  // ye abbi 5 return karega or ek baar print krne pr 4
        // echo ++$variable1;  // return 6 instantly
        echo --$variable1; // return 4
        echo "<br>";
        echo $variable1; // return 4


        // Logical Operators 

        // and (&&)
        // OR (||)
        // xor
        // !

        // AND
        echo "<p>For AND</p>";
        $myVar = (true && true);   // && or and we can use both 
        echo "<br>";
        echo var_dump($myVar);

        $myVar = (true and false);   // && or and we can use both 
        echo "<br>";
        echo var_dump($myVar);

        $myVar = (false and false);   // && or and we can use both 
        echo "<br>";
        echo var_dump($myVar);

        $myVar = (false and true);   // && or and we can use both 
        echo "<br>";
        echo var_dump($myVar);


        echo "<br>";
        echo "<br>";
        // XOR
        echo "<p>For Xor</p>";
        $myVar = (true xor true); 
        echo "<br>";
        echo var_dump($myVar);

        $myVar = (true xor false); 
        echo "<br>";

        echo var_dump($myVar);
        $myVar = (false xor true); 
        echo "<br>";

        echo var_dump($myVar);
        $myVar = (false xor false); 
        echo "<br>";
        echo var_dump($myVar);
        ?>


        <?php

        // Data types in php  
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array 
        // 6. Object

        echo "<br>";
        echo "<br>Data types <br>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.1;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        // we can make constants using Define 
        define('Pi',3.14);
        echo "The value of Pi is (Pi is defined as constant ,we can't change its value afterwards) : ";
        echo Pi;
        ?>
    </div>

</body>

</html>