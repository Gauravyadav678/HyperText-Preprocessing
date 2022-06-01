<!-- <?php
$num_one=null;
$num_two=4;
$res=$num_one+$num_two;
var_dump($res)
// oupt=4
?>

<?php
$num_one="123gaurav";
$num_two=4;
$res=$num_one+$num_two;
var_dump($res)
// oupt=123+7=127 it will add till the digit still warning
?>

<?php
$num_one="123gaurav";
$num_two=10.5;
$res=$num_one+$num_two;
var_dump($res)
// oupt=123+10.5=133.5 still warning
?> 

<?php
// echo and print
$num=20;
echo $num; // outpout =20

echo ($num); // output=20

echo " $num"; // output=20
print $num;  // output=20
print "$num" // output=20
?> 

<?php
// echo and print
$num=20;

echo " this is the values of the variable : $num "; // out= string and it's value
echo "<br>";
print  "this is the values of the variable : $num "; // out=string and it's value
echo 'this is the values of the variable : $num '; // out= as it is
print 'this is the values of the variable : $num '; // as it is
?> 

<?php
$res=print("hello"); // output= hello
echo $res; // output hello1
echo (print("hello")) // output hello1
?> 
<?php
$res=printf("%d",print("php examination")); // output =php examination1
echo $res; // output =php examination11
$s=printf("%o",printf("php Examination")); //output = php examination17
echo $s; // output = php examination172

?> -->
<!-- <?php
$res=printf(print(printf("%o",printf("php examination")))); //output =php examinationf1
echo $res; //output php examination17211
?> -->
<?php
echo sprintf("%d",9878); //output=9878
$res=print(printf("%x",sprintf("gaurav")));
echo "$res";
//echo $res;
?>