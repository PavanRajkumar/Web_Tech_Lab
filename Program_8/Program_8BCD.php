<?php
$a=array(array(1,2,3),array(4,5,6),array(7,8,9));
$b=array(array(1,3,2),array(6,5,4),array(7,9,8));

$m=count($a);
$n=count($a[0]);
$p=count($b);
$q=count($b[1]);

echo "Pavan Rajkumar Magesh - 1CR17CS090 <br>" ;

echo"Matrix A is:<br>";
for($r=0;$r<$m;$r++)
{
	for($c=0;$c<$n;$c++)
	{
		echo" ".$a[$r][$c];
	}
	echo"<br>";
}
echo"Matrix B is:<br>";
for($r=0;$r<$p;$r++)
{
	for($c=0;$c<$q;$c++)
	{
		echo" ".$b[$r][$c];
	}
	echo"<br>";
}
echo "Matrix Transpose of A is:<br>";
	for($r=0;$r<$m;$r++)
	{
		for($c=0;$c<$n;$c++)
		{
		echo" ".$a[$c][$r];
		}
	echo"<br>";
}
echo "Addition of Matrix A and B is:<br>";
if($m ==$p && $n==$q)
{
	for($r=0;$r<$m;$r++)
	{
		for($c=0;$c<$p;$c++)
		{
			echo $a[$r][$c] + $b[$r][$c]." ";
		}
		echo "<br>";
	}
}
echo "Matrix Multiplication of A and B is:<br>";
if($n==$p)
{
	$result=array();
	for($r=0;$r<$m;$r++)
	{
		for($c=0;$c<$p;$c++)
		{
			$result[$r][$c]=0;
			for($k=0;$k<$n;$k++)
			{
				$result[$r][$c]+=$a[$r][$k]+$b[$k][$c];
			}
		}
	}
	for($r=0;$r<$m;$r++)
	{
		for($c=0;$c<$p;$c++)
		{
			echo $result[$r][$c]." ";
		}
		echo "<br>";
	}
}
?>