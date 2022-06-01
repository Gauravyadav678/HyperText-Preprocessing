<?php
$str="this is sec E"; 
echo addcslashes("helloS Secton","S"). "<br>"; // add the / before the character

echo addslashes("my 'name' is ") . "<br>"; // when we want to use this by the user same string pass 

$hex=bin2hex("$str"); // first convert this into binary then convert into hexadecimal for encryption

echo "$hex" . "<br>"; 

$actual=hex2bin($hex); // use for decrption

echo $actual. "<br> "; 

echo chop("akash hello","hello")."<br>";

echo trim(" my name    is gaurav ").trim(" hello "). "<br>";// it is remove the spaces form the both sides

echo "my name is gaurav".rtrim(" hello")."<br>"; // it is used to remove rthe space from the left side

echo "my name is Elon Musk ".rtrim("hello ")."<br>"; // is is used to  removew the space from the right side

echo "the character  value of Integer ".chr(97)."<br>";   // print the ascii vslue

echo "the ascii value character ".ord("a")."<br>";

echo chunk_split("this is guarav",1)."<br>";

$decitobinary=decbin(10);
echo "binary values of the decimal  "."$decitobinary"."<br>";

$bintodec=bindec(1010);
echo "ddecimalbinary  to values of the   "."$bintodec"."<br>";


$dectooctal=decoct(15);
echo "decimal to octal   "."$dectooctal"."<br>";

$octtodec=octdec(17);
echo "octal  to decimal  "."$octtodec"."<br>";

$dectohex=dechex(15);
echo "decimal to hexa   "."$dectohex"."<br>";

$hexatodec=hexdec("f");
echo "hexa to decimal   "."$hexatodec"."<br>";

$bitohex=bin2hex("10");
echo "bin to hex   "."$bitohex"."<br>";
?>