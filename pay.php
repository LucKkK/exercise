<?php
	$amount=350;
	$n='';
	if ($amount>0&&$amount<100) {
		$n=$amount;
	}elseif ($amount>=100&&$amount<200) {
		$n=$amount-10;
	}elseif ($amount>=200&&$amount<300) {
		$n=$amount-50;
	}elseif ($amount>=300&&$amount<400) {
		$n=$amount-80;
	}elseif ($amount>=400&&$amount<500) {
		$n=$amount-120;
	}elseif ($amount>=500) {
		$n=$amount-200;
	}
	echo "$n";
	echo "</br>";

	switch ($amount) {
		case $amount>0&&$amount<100:
			$n=$amount;
			break;
		case $amount>=100&&$amount<200:
			$n=$amount-10;
			break;
		case $amount>=200&&$amount<300:
			$n=$amount-50;
			break;
		case $amount>=300&&$amount<400:
			$n=$amount-80;
			break;
		case $amount>=400&&$amount<500:
			$n=$amount-120;
			break;
		case $amount>=500:
			$n=$amount-200;
			break;	
	}
	echo "$n";

?>