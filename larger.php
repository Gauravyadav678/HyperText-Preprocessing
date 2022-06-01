<!DOCTYPE html>
<html>
<head>
    
    <title>
        larger of numbers
    </title>
</head>
 <h1>larger of the numers</h1>
 <form action="#" method="post">
     <label for="name">first Number :</label>
     <input type="text" name="num1" >
     <br>
     <label  for="name">second Number :</label>
     <input type="text" name="num2">
     <br>
     <input  type="submit" name="find" >
 </form>
 <?php
function find($num1,$num2)
{
    if($num1>$num2)
    {
        return  $num1;
    }
    else
    {
        return $num2;
    }
}
?>
<?php 
$submitted=isset($_POST['num1']) && isset($_POST['num2']);
if($submitted==1){
    $x=find($_POST['num1'],$_POST['num2']);
    echo "$x is greater";
}


?>
</html>