<?php

 $number1= 50;
 $number2= 100;
 $number3= 150;

 if ($number1>$number2 && $number1>$number3) {
   echo $number1;
 }
 else{
  if ($number2>$number1 && $number2>$number3) {
    echo $number2;
  }
  else
    echo $number3;
 }

 ?>