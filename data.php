<?php
$First_name=$_POST['fname'];
$last_name=$_POST['Sname'];

$ser_name="localhost";
$ser_user="root";
$ser_pass="";
$connection_check= mysqli_connect($ser_name,$ser_user,$ser_pass,"sectione");  // connection string
if(!$connection_check)
{
   // or we can use the die to print the message and exit the code
die("problem in connection".connect.error());
}

if(isset($_POST['save']))
{
$insert_query="INSERT INTO stu_record(First_name,Last_name) VALUES('$First_name','$last_name')";

if(mysqli_query($connection_check,$insert_query))
{
echo "data inserted";
}
else
{
echo " data not inserted";
}

}

//for display the result

if(isset($_POST['display']))
{
   $display_query="SELECT first_name,Last_name FROM stu_record";
   $data=mysqli_query($connection_check,$display_query);
   if(mysqli_num_rows($data)>0)
   {
      echo "<table border =2px solid black>";
      echo "<tr>";
      echo "<th>First Name</th>";
      echo "<th>last Name</th>";
      echo "</tr>";
   while($row = mysqli_fetch_array($data))
   {

      echo "<tr>";
      echo "<td>".$row['first_name']."</td>";
      echo "<td>".$row['Last_name']."</td>";
      echo "<td><input type=submit name=update value=update></td>";
      echo "<td><input type=submit name=delete value=delete></td>";
      echo "</tr>";
   }
   }
   else
   {
   echo "no record found";
   }
}
if(isset($_POST['Update']))
{
$fname=$_POST['fname'];
$lsname=$_POST['name'];
$update_query="update stu_record set First_name='$fname' where Last_name='$lsname'";
if(mysqli_query($connection_check,$update_query))
{
   echo "query updated successfully";
}
else
{
   echo "not deleted successfully";
}
}
if(isset($_POST['delete']))
{
$dname1=$_POST['dname'];
$delete_query="delete from stu_record where First_name='$dname1'";
if(mysqli_query($connection_check,$delete_query))
{
   echo "sucessfully deleted";
}
else
{
   echo "not deleted";
}
}

// if(isset($_POST['display']))
// {
//    $display_query="SELECT first_name,Last_name FROM stu_record";
//    $data=mysqli_query($connection_check,$display_query);
//    if(mysqli_num_rows($data)>0)
//    {
//       echo "<table>
//       <tr><th>first name</th><th>last name</th></tr>";
//       while($row = mysqli_fetch_array($data))
//       {
//          echo "<form action='data.php' method='post'>";
//          echo "<tr>";
//          echo "<td>"."<input type='text' name='first_name' value=$row['first_name']>"."</td>";
//          echo "<td>"."<input type='text' name='Last_name' value=$row['Last_name']>"."</td>";
//          echo "<td><input type=submit name=update value=update></td>";
//          echo "<td><input type=submit name=delete value=delete></td>";
//          echo "</tr>";
//          echo "</form>"
//       }
      
//       else
//       {
//       echo "no record found";
//       }


//    }
// }

?>