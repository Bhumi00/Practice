<?php

$str = "This";

echo "<br>";

$len= strlen($str);
echo "The length of the string is : ";
echo $len;

echo "<br>";
// . is used for string concatination in php 
echo "The length of the string is ". $len . " Thank you <br>";


// str_word_count() function is used for calculating the no. of words present in the string
$str = "Prashant setia is a good boy";
echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";

// strrev() for reversing the string
$str = "This";
echo "The reversed string is ". strrev($str) . ". Thank you <br>";
echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
?>