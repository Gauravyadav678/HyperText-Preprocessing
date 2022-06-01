<?php
 
 echo "<table border='1' >";
 for($num=0;$num<=9;$num++)
 {
     echo "<tr style='background-color:pink'>";
     for($i=0;$i<=9;$i++)
     {
       echo "<td>";
         echo $num." ".$i." ";
       echo "</td>";
     }
     echo "<br>";
     echo "</tr>";
 }


 echo "</table>";

 ?>
