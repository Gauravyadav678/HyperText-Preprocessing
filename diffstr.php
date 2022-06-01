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
            background-color: blue;
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
        body
        {
            background-color:lightgreen;
        }
    </style>
</head>

<body>
    <h1>String To The Array Converter</h1>
    <div class="mycode">
        <h2>Welocme!!..</h2>
    </div>
    <div class="new">
        <span class="my">Enter the String below</span>
    </div>
    <br>
    <br>
    <br>
   <div class="code">
       <form action="" method="post">
          <b> Enter :</b> <input type="text" name="st1" placeholder="enter text">
           <br>
           <br>
           <b> Enter :</b> <input type="text" name="st2" placeholder="enter text">
           <br>
           <br>
           <b>RESULT ::</b> <input type="submit" name="submit" > 
           <br>
           <br>
        <?php
        if(isset($_POST['submit']))
        {
        $str1 =$_POST['st1'];
        $str2 =$_POST['st2'];
        if($str1!=null and $str2!=null)
        {
        $str_pos = strspn($str1 ^ $str2, "\0");
        $result=$str2[$str_pos];
        echo "The First Caharcter in String 2nd is ' $result ' that is different from the String First '$str1[$str_pos]' ";
        }
        }
        ?>
        
       </form>
   </div>
</body>
</html>                                   
