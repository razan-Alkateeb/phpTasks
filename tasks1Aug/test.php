<?php //declare(strict_types=1);



// function message() {
//     echo "Hello world! <br>";
//   }
  
//  message();

//---------------------------------------

//  function yourName($name) {
//     echo " my name is : $name <br>";
//   }
  
//   yourName("Rania");

//   echo "<br> <br>";

//---------------------------------------


//This example has a function with two arguments ($name , $age)

// function yourInfo($name , $age) {
//     echo " my name is : $name <br> my age is : $age <br>";
//   }
  
//   yourInfo("Razan", 24 );

//   echo "<br> <br>";


  //----------------------------------------


// function sum(int $a, int $b) {
//     return $a + $b;
//   }
//   echo sum(5 ,10.89);

//   echo "<br> <br>";



//strict_types---------------------------------------



// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5 ,"5 fff");

// echo "<br> <br>";


  //----------------------------------------

// function addNumbers(int $a, int $b) {//fatal error
//     return $a + $b;
//   }
//   echo addNumbers(5 ," 10 ");

// echo 10+"5 add";
// echo "<br> <br>";

//---------------------------------------


//Default Argument Value


// function setHeight(int $minheight = 50) {
//     echo "The height is : $minheight <br>";
//   }
  
//   setHeight();

//   echo "<br> <br>";


  //----------------------------------------
// Returning values

//   function rectangleArea(int $h, int $w) {
//     $a = $h * $w;
//     return $a;
//   }
  
//   echo "rectangleArea" . rectangleArea(5, 5) . "<br>";
  
//   echo "<br> <br>";
  //---------------------------------------


//   function adding(float $a, float $b)  {
//     return (int)($a + $b);
//   }
//   echo adding(1.2, 5.2);

//    echo "<br> <br>";

   //------------------------------------

// variable => name / value / reference(address)

//call by value


// function add_five($value ) {
//     $value += 5;
//     echo $value;
//   }
  
//   $num = 2;
// //   echo $num;

//   add_five($num );
  


   //---------------------------------------
//call by reference

//    function add_five(&$value ) {
//     $value += 5;

//   }

  
//   $num = 2;
//   add_five($num );
//   add_five($num );
//   echo $num;
  






