<?php

// $a = 100;
// $b = 200;
// $c = 100;
    // if($b>$a)
    // {
    //     if($c == $a)
    //     {
       
    //         if(($c + $a) == $b)
    //           {
    //             echo" Yes";
    //           }
    //     }
    // }
////////////////////////////////////////////////////

    // Test Case 1
// $a = 100;
// $b = 200;
// $c = 300;

// if($b > $a)
// {
//     if($c>$a){
//         echo "A Is Not Larger Than B Or C ";
//     }
// }

// A Is Not Larger Than B Or C
////////////////////////////////////////////////////
// Test Case 2
// $a = 200;
// $b = 100;
// $c = 300;

// // A Is Larger Than B

//       if($a > $b){
//         echo"A Is Larger Than B";
//       }
////////////////////////////////////////////////////

      // Test Case 3
// $a = 200;
// $b = 200;
// $c = 100;
//     if($a > $c)
//     {
//         echo"A Is Larger Than c";
//     }

// A Is Larger Than c
////////////////////////////////////////////////////
// $admins = ["Osama", "Ahmed", "Sayed"];

// if($_SERVER["REQUEST_METHOD"]==="POST"){
//     echo"The Request Method Is Post And Username Is " .$_POST['user'];
//     echo "<br>";
//     if($_POST['user'] === "Osama" ){
//        echo"This Username ". $_POST['user'] ." Is Admin";
//     }
//     if($_POST['user'] === "Ahmed" ){
//         echo"This Username ". $_POST['user'] ." Is Admin";
//      }
//      if($_POST['user'] === "Sayed" ){
//         echo"This Username ". $_POST['user'] ." Is Admin";
//      }
// }
// // Input Name "Osama"

// // Needed Output
// //"The Request Method Is Post And Username Is Osama"
// //"This Username Osama Is Admin"

 ?>
<!-- // <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>

// <form action="" method="POST">
//   <input type="text" name="user">
//   <input type="submit" value="Send">
// </form>
  
// </body>
// </html> -->

<?php
// $a = 30;
// $b = 20;
// $c = 10;

// if ($a + $b === $c) {

//   echo "A + B = C";

// } elseif ($a + $c === $b) {

//   echo "A + C = B";

// } elseif ($b + $c === $a) {

//   echo "B + C = A";

// } else {

//   echo "The End";

// }

// echo ($a + $b === $c) ?  "A + B = C" : ( ($a + $c === $b) ?  "A + C = B" :( ($b + $c === $a) ?  "B + C = A" : "The End"));

//       echo "<br/>";
// Output
//"B + C = A"

// $name = "Osama";
// $age = 19;
// $country = "Egypt";

// if ($age > 18) {
//   echo "The Age Is Good To Go<br>";
//   if (gettype($name) === "string") {
//     echo "The Name Is Good To Go<br>";
//     if ($country === "Egypt") {
//       echo "The Country Is Good To Go<br>";
//     }
//   }
// }
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo (($age > 18) && (gettype($name) === "string") && ($country === "Egypt") ) 
// ? "The Age Is Good To Go<br> The Name Is Good To Go<br> The Country Is Good To Go<br>":"null";
// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"





















 
    // Control Structure
    // - Switch

    // Syntax
    // switch (expression) {
    //   Case 1:
    //     // Code Block 1
    //     break;
    //   Case 2:
    //     // Code Block 2
    //     break;
    //   Case 3:
    //     // Code Block 3
    //     break;
    //   Default:
    //     // Default Code Block
    // }
    // $genre = "Hack And Slash";
 
    // if ($genre === "RPG") {
    
    //   echo "I Recommend Ys Games";
    
    // } elseif ($genre === "Hack And Slash") {
    
    //   echo "I Recommend Castlevania Games";
    
    // } elseif ($genre === "FPS") {
    
    //   echo "I Recommend Uncharted Games";
    
    // } elseif ($genre === "Platform") {
    
    //   echo "I Recommend Megaman Games";
    
    // } elseif ($genre === "Puzzle") {
    
    //   echo "I Recommend Megaman Games";
    
    // } else {
    
    //   echo "I Recommend Shadow Of Mordor And Shadow Of War";
    
    // }
    
    // // Needed Output
    // "I Recommend Castlevania Games"

//     $genre = "Hack And Slash";
//     switch($genre){
//         case"RPG":
//             echo"I Recommend Ys Games";
//             break;
//         case"Hack And Slash":
//             echo"I Recommend Castlevania Games";
//             break;
//         case"Puzzle":
//             echo"I Recommend Megaman Games";
//             break;
//         case"Platform":
//             echo"I Recommend Megaman Games";
//             break;


//             default:
//             echo "Unknown Day";
//     }
// ?>



















<?php

$num_one ;
$num_two ;
$op ;
    
        ($op =="+") ? $num_one+$num_two :
        (($op =="-") ? $num_one-$num_two : 
        (($op =="*")? $num_one*$num_two  :
        (($op =="/")? $num_one/$num_two  :
        "Unknown Operation"
)));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
     <h1> Calc </h1>
     <form action="" method="post">
        <input type="text" name="num_one" >
        <input type="text" name="num_two" >
        <input type="submit" value="Send">
        <label for="Send"></label>
     </form>
</body>
</html>
