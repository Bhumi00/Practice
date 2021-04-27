<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1> Lets learn about PHP </h1>
        <p>Your party status is here:</p>
        <?php
        $age = 6;
        if ($age > 18) {
            echo "You can go to the party";
        } else if ($age == 7) {
            echo "You are 7 years old";
        } else if ($age == 6) {
            echo "You are 6 years old";
        } else {
            echo "You can not go to the party";
        }

        // Array can be created using the function array()
        $fruits = array("banana", "apple", "guvava", "mango");
        // echo $fruits;     // this will give error
        echo "<br>";
        echo $fruits[0];
        echo "<br>";
        echo $fruits[1];
        echo "<br>";
        echo $fruits[2];

        // count fxn will give the no. of items present in array
        echo "<br>";
        echo count($fruits);


        // Loops in PHP

        // While loop
        $a = 0;
        while ($a <= 10) {
            echo "<br>";
            echo "the value of a is : ";
            echo $a;
            $a++;
        }

        echo "<br>";
        // iterating through the array
        $a = 0;
        while ($a < count($fruits)) {
            // echo "<br>";
            echo "<br> the fruit is : ";
            echo $fruits[$a];
            $a++;
        }

        // Do while loop  // Atleast ek baar run to hota he hai -- firr condition chck krta hai
        echo "<br>";
        echo "<br>";
        echo "Do while Loop";
        $a = 200;
        do {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        } while ($a < 10);

        // For loop 
        echo "<br>";
        echo "<br>";
        echo "For Loop";

        for ($a=0; $a < 10 ; $a++) { 
            echo "<br>The value of a from the for loop is : ";
            echo $a;
        }


        // foreach loop is used to iterate through an array , it makes our work very easy
        echo "<br>";
        echo "<br>";
        echo "Foreach Loop";
        foreach ($fruits as $value) {
            echo "<br>The value from foreach loop is ";
            echo $value;
        }



        // Functions  using function keyword 

        echo "<br>";
        function print5(){
            echo "<br> Five";
        }

        // calling the defined function
        print5();
        print5();
        print5();


        echo "<br>";
        function print_number($number){
            echo "<br>your number is : ";
            echo $number;
        }

        print_number(112);
        print_number(22);
        print_number(10);
        print_number(0);

        ?>

    
    </div>
</body>

</html>