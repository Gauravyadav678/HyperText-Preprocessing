<?php

function checkNum($number,$number2) {
  if($number!=0 && $number2==0) {
    throw new Exception("zero devision error is here");
  }
  return true;
}

try {
  // checkNum(5,);
  $number=5;
  $number2=0;
  if($number!=0 && $number2==0) {
    throw new Exception("zero devision error is here");
  }
  
  echo 'If you see this, the number is 1 or below';
}

catch(Exception $e) {
  echo $e->getMessage();
}

?>