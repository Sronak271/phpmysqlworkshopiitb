<?php

$string = "my name is Ronak";


//number of character in string
$length = strlen($string);
echo " length = $length";
echo "<br>";

//breaking string into an array
$exparray = explode(" ",$string);
print_r (explode(" ",$string));
echo "<br>";

//reverse string
$reverse = strrev("$string");
echo "revese = $reverse";
echo "<br>";

//lower case form
$lowercase=strtolower($string);
echo "lowercase = $lowercase";
echo "<br>";

//upper case form
$uppercase = strtoupper($string);
echo "uppercase = $uppercase";
echo "<br>";

$replace = "my name is Ronak";
$result = substr_replace($replace,"Singh",11,13);
echo "result = $result ";
?>