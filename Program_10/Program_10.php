<html>
<head>
	<style>
	table, td, th{
		border: 1px solid black;
		width: 40%;
		text-align: center;
		border-collapse:collapse;
		margin: auto;
		}
	</style>
</head>

<?php
	$conn=new mysqli("localhost","root","","WebLab");
	if ($conn->connect_error)
		die("Connection failed: " . $conn->connect_error);

	$sql = "SELECT * FROM student";
	$result = $conn->query($sql);
	$a=[];

	echo "<br>";
	echo "<center> BEFORE SORTING </center>"; 
	echo "<table border='2'>";
	echo "<tr>";
	echo "<th>USN</th><th>NAME</th><th>Batch</th></tr>";

	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>". $row['usn']."</td>";
			echo "<td>". $row['name']."</td>";
			echo "<td>". $row['batch']."</td></tr>";
			array_push($a, $row['usn']);
		}
		echo "<br/>";
	}
	else
		echo "Table is Empty";
	echo "</table>";

	$n=count($a);
	echo "<br/>";
	echo "<br/>";
	for ( $i = 0 ; $i< ($n -1) ; $i++ ) {
		$pos= $i;
		for ($j=$i+1; $j<($n) ; $j++) {
			if($a[$pos]>$a[$j])
			$pos=$j;
		}
		if($pos!=$i){
			$temp=$a[$i];
			$a[$i]=$a[$pos];
			$a[$pos]=$temp;
		}
	}
	$b=[];
	$c=[];
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while ($row=$result->fetch_assoc()) {
			for ( $i = 0 ; $i< $n; $i++ ){
				if($row["usn"]==$a[$i]){
					$b[$i]=$row["name"];
					$c[$i]=$row["batch"];
				}
			}
		}
	}

	echo "<br>";
	echo "<center> AFTER SORTING </center>"; 
	echo "<table border='2'>";
	echo "<br/>";
	echo "<tr>";
	echo "<th>USN</th><th>NAME</th><th>Batch</th></tr>";
	for ($i=0; $i <$n ; $i++) {
		# code...
		echo "<tr>";
		echo "<td>". $a[$i]."</td>";
		echo "<td>". $b[$i]."</td>";
		echo "<td>". $c[$i]."</td>";
	}
	echo "</table>";
	$conn->close();
?>
</body>
</html>