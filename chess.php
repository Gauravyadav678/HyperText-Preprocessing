<?php

echo "<table style='background-color:red;margin-top:80px;' ALIGN='CENTER' > ";
echo "<body style='background-image-url:'><body>";
for($row=1;$row<=8;$row++)
{

    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
    if(($row+$col)%2==0)
    {
        echo "<td height='50px' width='50px'  bgcolor='black'></td>";
    }
    else
    {
        echo "<td height='50px' width='50px'  bgcolor='white'></td>";  
    }
    }
    echo "</tr>";
}



echo "</table>";
?>