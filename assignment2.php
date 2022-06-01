<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="ass.css">
</head>
<style>
    body{
        background-color:yellow;
    }
</style>
<body>
    
    <h1> ELECTRICITY BILL GENERATOR</h1>
    <form action="" method="POST"  >
       Enter the units of Units : <input type="number" name="num1" style="background-color:pink;font-size:40px;margin-top:200px" placeholder="enter the units">
       <br>
       <br>
       <input type="submit" name="submit" style="background-color:yellow;font-size:20px;">
       <?php
$total='';

if(isset($_POST['submit']))
{
$units=$_POST['num1'];
$first=3.00;
$second=4.00;
$third=5.20;
$fourth=6.50;
if($units<=50)
{
    $total=$units*$first;
}
elseif($units>50 && $units<=100)
{
    $previous=50*$first;
    $rest=$units-50;
    $total=$previous+($rest*$second);
}
elseif($units>100 && $units<=200)
{
    $previous=50*$first+(100*$second);
    $rest=$units-150;
    $total=$previous+($rest*$third);
}
elseif($units>200 && $units<=250)
{
    $previous=(50*$first)+(100*$second)+(100*$third);
    $rest=$units-250;
    $total=$previous+($rest*$fourth);
}
} ?>
       Amount in Rs :<input type="text" name="result" value="<?php echo $total; ?>">
    </form>
</body>
</html>

