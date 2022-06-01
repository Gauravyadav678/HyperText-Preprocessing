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
            background-color:green;
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
            background-color:lightblue;
        }
    </style>
</head>

<body>
    <h1>check whether a Deal is better or not</h1>
    <div class="mycode">
        <h2>Welocme!!..</h2>
    </div>
    <div class="new">
        <span class="my">the Output is given below</span>
    </div>
    <br>
    <br>
    <br>
   <div class="code">
       <form action="" method="post">
        
       
        <?php  
       
        
	    function better_deal($quantity1, $quantity2, $price1, $price2) 
	   {
		$deal1 = $price1 / $quantity1;
		$deal2 = $price2 / $quantity2;
		return($deal1 > $deal2);
	   }
	
	    $quantity1 = 70;
     	$quantity2 = 100;
     	$price1 = 1035;
     	$price2 = 1200;
	
    	if(better_deal($quantity1, $quantity2, $price1, $price2)) {

		 print("The first deal is best!<br>");
         echo $quantity1." --quantity one  <br>";
         echo $quantity2."--quantity two <br>";
         echo $price1." --preice one <br>";
         echo $price2."-- price two <br>";
	   }
	   else 
     	{
		print("The second deal is best!");
        echo $quantity1." --quantity one  <br>";
        echo $quantity2."--quantity two <br>";
        echo $price1." --preice one <br>";
        echo $price2."-- price two <br>";
    	}
    
        ?>
       
       </form>
   </div>
</body>
</html>
