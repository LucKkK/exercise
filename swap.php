		<meta charset="UTF-8">

<?php
	$a = $_POST['name']; 
	$m = '';
	$n = 0;
	while(isset($a[$n])!= null) {
		$m = $a[$n++].$m;
	}	
	echo "翻转后的字符串为:".$m;

?>