<?php

// logical ad or condition 
// logical or will return true if any one  conditon is true it will retuen false when no conition match
$num_one=5;
$num_two=6;
var_dump($num_one && $num_two);
var_dump($num_one or $num_two);
// logical not   reprenatation !$num_one
var_dump(!$num_one);
// xor will return true in case of odd number of condition


// string operator  we will concatete string with the help of '  .  ' operator
$str1="hello";
$str2="section-e";
print($str1.$str2)."<br>";
echo "welcome"."freshers";

// concatenation assignment opeartor
 $str1.=$str2;
 echo $str1;

 // Array operator ==> it is a collection of multiles types values
// initialization of the array
$stu_rec=array(10,20,"gaurav",34.40);
var_dump($stu_rec);

?> 