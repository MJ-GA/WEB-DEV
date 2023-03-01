<?php
echo "<table border =\"2\" style='background-color:#00FFFF; width:50% ;margin-top:10%; margin-left:20%'>";

	for ($row=1; $row <= 5; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 2; $col++) { 
            if($col ==1)
		   $p = 11 *$row;
           else{
            $p = 13 * $row;
           }
           echo "&nbsp";
		   echo "<td colspan=\"5\"> $p </td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>