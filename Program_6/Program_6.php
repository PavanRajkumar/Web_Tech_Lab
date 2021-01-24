<?php 
	echo "<h1><center> Pavan Rajkumar Magesh 1CR17CS090 </center></h1>";
	$file ="count.txt";
	$count=0;
	$count= strval(file_get_contents($file));	
	$count = (int)$count;
	file_put_contents($file, $count+1);
	echo "<center style='color: blue'><h1> The visitor count = ".$count." </h1></center>";
?>