<?php
session_start();
$name=$_POST['name'];
$pass=$_POST['password'];
if(isset($_POST['submit']))
{
echo $name;
echo $pass;
}



?>