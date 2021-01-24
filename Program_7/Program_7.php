<html>
<head>
	<title>Digitalised clock</title> 
	<meta http-equiv="refresh" content="1"> 
	<style type="text/css">
		p{
			border: solid black 5px;
			margin: 5px 500px 500px 500px;
			background-color: cyan;
		}
	</style>
</head>

<body>
	<center>
		Pavan Rajkumar Magesh<br>
		1CR17CS090<br>
	</center>
	<?php
		date_default_timezone_set("Asia/kolkata");  
		echo "<center><p>";
		echo "Digital Clock"."</br>";
		echo date("h : i : s A"); 
		echo "</p></center>";
	?>
</body>
</html>