	<meta charset="utf-8">
<?php
	$luc="boom sa ka la ka";
	$kk=explode(" ", $luc);
	$n=0;
	$m=0;
	$s="ka";
	foreach ($kk as $Item) {
		if ($s!=$Item) {
			$m+=1;
		}else{
			$n+=1;
		}
	}
	echo "ka一共出现了".$n."次";

?>