<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1
        {
            font-size: xx-large;
            background-color: yellow;
            text-align: center;
        }
        .mycode h2{
            background-color: blue;
            text-align: center;
            font-size: 25px;
            margin-top: 70px;
            background-color: coral;
        }
       .my{
           font-size: 25px;
           background-color: red;
           text-align: center;
           border-radius:50%;
           padding-top: 70px;
           padding-bottom: 70px;
           padding-left: 70px;
           padding-right: 70px;
           border-style: dotted;
           border-color: greenyellow;   
           border-width: 10px;
           }
        .new
        {
            margin-top: 100px;
            text-align: center;
        }
        .code{
            text-align: center;
            margin-top: 30px;
        
        }
        body{
            background-color:lightyellow;
        }
    </style>
</head>

<body>
    <h1>Number Checker for Positive Or Neagative</h1>
    <div class="mycode">
        <h2>Welocme!!..</h2>
    </div>
    <div class="new">
        <span class="my">Enter the digit below</span>
    </div>
    <br>
    <br>
    <br>
   <div class="code">
       <form action="" method="post">
          <b> Enter :</b> <input type="text" name="num1" placeholder="enter number">
           <br>
           <br>
        <b> Submit : </b> <input type="submit" name="submit">
        <?php
        $result='';
        if(isset($_POST['submit']))
       {
       $num_one=$_POST['num1'];
       if($num_one==0)
        {
            $result=" number is zero $num_one ";
        }
        else  if($num_one>0){
        $result=" number is positive  $num_one ";
        }
        else
        {
            $result="the number is negative $num_one ";
        }
      }
      ?>
        <b> Result : </b> <input type="text" name="result" value="<?php echo $result ; ?>">
       </form>
   </div>
</body>
</html>
