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
            background-color: blue;
            text-align: center;
        }
        .mycode h2{
            background-color: blue;
            text-align: center;
            font-size: 25px;
            margin-top: 70px;
            background-color: violet;
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
            background-color:
        }
    </style>
</head>

<body>
    <h1>String To Array Convertion</h1>
    <div class="mycode">
        <h2>Welocme!!..</h2>
    </div>
    <div class="new">
        <span class="my">Have a WonderFull Day</span>
    </div>
    <br>
    <br>
    <br>
   <div class="code">
       <form action="" method="post">
    
           <br>
           <br>
        <b>Given string Was: </b> <p> 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156' <br></p>
        <?php
        $a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
        $arru = explode(",",$a);
        echo "THE OUTPUT OF THE STRING IS <br>";
        for ($x = 0; $x <count($arru); $x++) {
        echo "value at [ $x ]: $arru[$x] <br>";
       }
?>

       
       </form>
   </div>
</body>
</html>
