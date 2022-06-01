<!DOCTYPE html>
<html>
<body>

<form   method="post">
<table>

<tr>
<td> Usenename : </td>
<td>  <input type="text" name="name" > </td>
</tr>

<tr>
<td> password : </td>
<td>  <input type="password" name="pass" > </td>
</tr>

<tr>
<td> submit : </td>
<td>  <input type="submit" name="save" > </td>



</tr>

</table>


</form>

<?php
$my=$_POST['name'];
$pass=$_POST['pass'];
echo $my;
echo "<ol>";
echo "<li >";
echo $my;
echo "</li>";
echo "<li>";
echo  $pass;
echo "</li>";
echo "</ol>";

?>
 
</body>
</html>
