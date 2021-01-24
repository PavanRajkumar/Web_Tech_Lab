<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<center>
		Pavan Rajkumar Magesh<br>
		Calculator
	<form method="POST">
		<table border="1">
			<tr>
				<th>Input 1:</th>
				<td><input type="text" name="a"></td>
			</tr>
			<tr>
				<th>Input 2:</th>
				<td><input type="text" name="b"></td>
			</tr>
			<tr>
				<td colspan="2" align = "center"><input id="y" type="submit" name="cal" value="CALCULATE"></td>
			</tr>
	</form>
    </center>
	<?php
		if(isset($_POST['cal']))
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			if(is_numeric($a)&& is_numeric($b))
			{
				echo"<tr><th>Sum: </th><td>".($a+$b)."</td></tr>";
				echo"<tr><th>Difference: </th><td>".($a-$b)."</td></tr>";
				echo"<tr><th>Product: </th><td>".($a*$b)."</td></tr>";
				echo"<tr><th>Quotient: </th><td>".($a/$b)."</td></tr>";
			}
			else
			{
				echo "Invalid input";
			}
		echo "</table>";
		}
	?>
</body>
</html>