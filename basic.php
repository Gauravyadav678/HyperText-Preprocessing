<?php
$num_one=null;
var_dump($num_one)
// output = null
?>

<?php
$num_one=123;
var_dump($num_one)
// output= int(123)
?>

<?php
$num_one=123.67;
var_dump($num_one)
// output= float(123)
?>

<?php
$num_one="gaurav";
var_dump($num_one)
// output= String(6)"gaurav"
?>

<?php
$num_one="12345.67";
var_dump($num_one)
// output= string(8)"12345.67"
?>


<?php
$num_one=4;
$num_two=5;
$res=$num_one+$num_two;
var_dump($res)
// output int=9;
?>

<?php
$num_one=1234;
$num_two=52.6;
$res=$num_one+$num_two;
var_dump($res)
// output int=1286.6;
?> -->
<!-- 
<?php
$num_one="gaurav";
$num_two="gaurav";
$res=$num_one+$num_two;
var_dump($res)
// output int=faTAL error deu to concatenation;
?>
