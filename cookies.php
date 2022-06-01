<DOCTYPE! html>
    <?php
     setcookie("gfg","sectiongaurav",time()+60);
    ?>
<html> 
<head>
<title> gaurav </title>
</head>
<body>
    <?php

   if(isset($_COOKIE["gfg"]))
   {
       echo "cookies hava been set";
   }

   else
   {
       echo "not set";
   }

?>
</body>




</html>