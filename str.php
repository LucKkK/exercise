<?php
	$name=$_POST['name'];
	echo out($name);
	function out ( $str , $ucfirst = true){
    	$str = ucwords(str_replace('_', ' ', $str));
    	$str = str_replace(' ','',$str); 
    	 return $str;
	}
?>