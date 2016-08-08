<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    for ($a=2; $a < 1000; $a++) { 
        $n=1;
        for ($m=2; $m < $a; $m++) { 
            if ($a%$m==0) {
                $n=0;
            }
        }if ($n!=0) {
            echo $a."</br>";
        }
    }
?>
</body>
</html>
