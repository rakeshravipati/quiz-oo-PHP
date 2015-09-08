<?php 
	echo "<div>";
    echo "<div>Total Questions	 	: ".count($questions),"</div>";
    echo "<div style='background-color:blue;color:white;'>Total Correct 		: ".$correct,"</div>";
    echo "<div style='background-color:red;color:white;'>Total Wrong 			: ".$wrong,"</div>";
    echo "<div style='background-color:red;color:white;'>Total Unanswered 		: ".$unanswered,"</div>";
    echo "</div>";
?>