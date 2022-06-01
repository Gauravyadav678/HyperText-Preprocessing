<!DOCTYPE html>
<html>
<head>
    
    <title>
        larger of numbers
    </title>
</head>
 <h1>larger of the numers</h1>
 <form action="#" method="post">
     <label for="name">first name :</label>
     <input type="text" name="n1" >
     <br>
     <label  for="name">second name :</label>
     <input type="text" name="n2">
     <br>
     <input  type="submit" name="find_userdata" >
 </form>
 <?php
function find($n1,$n2)
{
   echo "<table border=1px>";

   echo "<tr>";

   echo "<th>"; 
   echo "first Name";
   echo "</th>";
   echo "<td>";
   echo $n1;
   echo "</td>";
   echo "</tr>";
   echo "</table>";
}
?>
<?php 
$submitted=isset($_POST['n1']) && isset($_POST['n2']);
if($submitted==1){
    find($_POST['n1'],$_POST['n2']);
    
}


?>
</html>