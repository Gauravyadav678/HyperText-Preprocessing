<?php
$name=$_POST['name'];
$pass=$_POST['password'];
$add=$_POST['address'];

$ser_name="localhost";
$ser_user="root";
$ser_pass="";
$connection_check= mysqli_connect($ser_name,$ser_user,$ser_pass,"php_practical");
if(!$connection_check)
{

die("problem in connection".connect.error());
}
if(isset['save'])
{
 $inesrt="INSERT INTO student(Name,'Password','Address') values('$name','$pass','$add')";
 if(mysqli_query($connection_check,$insert)){
     echo "inserted ";
 }
 else
 {
     echo "not inserted"
 }
}

?>