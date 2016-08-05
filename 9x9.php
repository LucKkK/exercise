	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		for ($i=1;$i<=9;$i++) { 
			for ($j=1;$j<=$i;$j++) { 
					//$j=9;$j>=$i;$j--
					// echo $j,"*",$i,"&nbsp&nbsp";
					// echo "<br>";
				echo $i."*".$j,"&nbsp&nbsp";
			}
			echo "<br/>";
		}
		?>
</body>
</html>