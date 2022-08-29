<?php

  $name = "mehdi";
  $is_student = true;
  $is_orphan = true;
  $country = "Maroc";
  $country_discount = 50;
  $price = 100;
  $student_discount = 10;
  $orphan_discount = 15;

// if countrey is true
  if ($country  ==  "Maroc"){
    //if student true
    if($is_student== true){
        //if orphan true
        if($is_orphan==true){
            echo "Hello $name";
            echo "<br>";
            echo "country_discount $country_discount ";
            echo "<br>";
            echo "student_discount $student_discount";
            echo "<br>";
            echo "orphan_discount $orphan_discount ";
            echo "<br>";
            echo "Thi final price is ".$price - $country_discount -  $orphan_discount  - $student_discount;

        }
        // if orphan false
        else{
            echo "Hello $name";
            echo "<br>";
            echo "country_discount $country_discount ";
            echo "<br>";
            echo "student_discount $student_discount";
            echo "<br>";
            echo "Thi final price is ".$price - $country_discount  - $student_discount;
        }
         
    }
    //if student false
    else{
        echo "Hello $name";
        echo "<br>";
        echo "country_discount $country_discount ";
        echo "<br>";
        echo "Thi final price is ".$price - $country_discount;
    }
   
    

  }
  //if country false
  else{

    echo "Hello $name";
    echo "<br>";
    echo "Non Discount ";
    echo "<br>";
    echo "Thi final price is $price ";



  }

?>