<?php

//Write a PHP script to see if the specified year is a leap year or not.
$year = 2013;

if ($year % 400 == 0) {
   echo $year." is a leap year.";

} elseif ($year % 100 == 0) {

   echo $year." is not a leap year.";

} elseif ($year % 4 == 0) {
   echo $year." is a leap year.";
} else {
   echo $year." is not a leap year.";
}


echo"<br> <br>";

//Write a PHP script to check the season depending on the inserted temperature 
//if the temperature is below 20, we are in winter otherwise the season is summer.
//Sample Input: 27
//Sample Output: ‘It is summertime!’


$temperature =27;
if($temperature < 20 ){
    echo "we are in winter";
}else{
    echo "the season is summer";
}

echo"<br> <br>";


// Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same,
// then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’

$num1 = 10;
$num2 = 10;

if($num1 == $num2){
    echo ($num1 + $num2) * 3 ;
}else{
    echo "not equal";
}

echo"<br> <br>";


// Write PHP to check if the sum of the two given numbers equals 30,
// if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

if(($num1 + $num2) == 30){
    echo "true";
}else{
    echo "false";
}


echo"<br> <br>";

// Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

$num = 20;
if ($num > 0){
    echo $num*3;
}else{
    echo "false";
}

echo"<br> <br>";

// Write a PHP script to check if the integer value ​​is in the
// range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

if($num >= 20 && $num <= 50){
    echo "true";
}else{
    echo "false";
}

echo"<br> <br>";

// Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

$nums = [ 1, 5, 9 ];

  if ($x >= $y && $x >= $z)
    $max = $x;
  if ($y >= $x && $y >= $z)
    $max = $y;
  if ($z >= $x && $z >= $y)
    $max = $z;

?>