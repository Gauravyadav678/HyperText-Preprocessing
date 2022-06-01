<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
        font-size: 40px;
        background-color:black;
        color: yellow;
        opacity: 5;
    }
    .form{
        text-align: center;
        margin-top: 40px;
        font-size: 40px;
    }
</style>
<body>
    <h1>To Check Whether a number is adam or not! &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The Number</label>
        <input type="text" name="user_number">
        
        <br>
        <button type="submit" name="submit">Test me</button>
        <?php
        echo "<br>";
      if(isset($_POST['submit']))
       {
       $num_one=$_POST['user_number'];
       $square=pow($num_one,2);
       $rev=strrev($square);
       $unroot=sqrt($rev);
       $rev_unroot=strrev($unroot);
       if($rev_unroot==$num_one){
           echo "The  Given Number is adam Number ";
       }
       else{
           echo "The Given Number is not Adam Number";
       }
    
       }
       
    
      ?>
    </form>

</body>
</html>