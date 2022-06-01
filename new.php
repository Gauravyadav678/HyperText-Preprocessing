<?php

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['Gender'];
$server_name="localhost";
$user_name="root";
$user_password="";
$check_connection=mysqli_connect($server_name,$user_name,$user_password,"mydata");
if(!$check_connection)
{
    die("problem in connection".error.connect());
}
else
if(isset($_POST['save']))
{
 $insert_query="INSERT INTO student(Name,Email,Password,Gender) VALUES('$name','$email','$password','$gender')";
 if(mysqli_query($check_connection,$insert_query))
 {
     echo "data has been inseted";
 }
 else
 {
     echo "data not inserted";
 }

}
if(isset($_POST['display']))
{
$display_query="SELECT * from student";
$data=mysqli_query($check_connection,$display_query);
if(mysqli_num_rows($data)>0)
{
   echo "<table border=10px solid black>";
    echo "<tr>";
    echo "<th > Name</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th> Gender</th>";
    echo "</tr>";
    while($row=mysqli_fetch_array($data))
    {
        echo "<tr>";
        echo "<td>".$row['Name']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Password']."</td>";
        echo "<td>".$row['Gender']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
}
if(isset($_POST['reset']))
{
$newname=$_POST['newname'];
$oldname=$_POST['oldname'];

$update_query="update student set Name='$newname' where Name='$oldname'";
if(mysqli_query($check_connection,$update_query))
{
    echo "update successfully";

}
else
{
    echo "not updatd succefully";
}
}


?>