<!DOCTYPE html>
<?php 
setcookie("classphp","section E",time()+60)
?>
<html>
<head>
</head>
<body>
    <?php
    if(isset($_COOKIE['classphp']))
    {
      echo "<h1 style='color:red;text-align:center;bgcolor:yellow'>Your cookies has been set</h1>"; 
    }
    else
    {
        echo "oops! Your cookies are not longer in use ";
    }
    ?>
</body>
</html>