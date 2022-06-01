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
    <h1>Number Guess Game! &#128512; </h1>
    <form action="" class="form" method="post">
        <label for="">Enter The Number</label>
        <input type="text" name="user_number">
        <br>
        <button type="submit" name="submit">Test me</button>
        <?php
       
      if(isset($_POST['submit']))
       {
       $r_num=rand(1,5);
       $num_one=$_POST['user_number'];
       
       echo "<br>";
      
        if($num_one==$r_num){
               echo "Congratulation ! Your Guess Number is True "."$num_one"."<br>";
              
           }
           elseif($num_one<$r_num){
               echo "Sorry!! Your Entered number is Less than the Guess number Again "."<br>";
              
           }
           else{
               echo "Sorry!  Your Entered number is Greater than the Guess number Again"."<br>";
               
           }

       }
       
    
      ?>
    </form>

</body>
</html>