<?php


function continuous_alphabets($val)
{
   $num = 65;
   for ($m = 0; $m < $val; $m++)
   {
      for ($n = 0; $n <= $m; $n++ )
      {
         $ch = chr($num);
         echo $ch." ";
         $num = $num + 1;
      }
      echo "\n";
   }
}
$val = 3;
continuous_alphabets($val);
?>