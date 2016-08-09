<?php

    $a=array(
         ['name'=>'a','price'=>50],
         ['name'=>'b','price'=>40],
         ['name'=>'c','price'=>60],
         ['name'=>'d','price'=>30],
         ['name'=>'e','price'=>70],
         ['name'=>'e','price'=>20],
         );

    $m = array();

    $n = array();

    // print_r($n);
    // echo "</br>";

    foreach ($a as $item) {

        $key = $item['name'];

        if (empty($m[$key])) {

            $m[$key] = $item['price'];

        }
        else {

            $m[$key] += $item['price'];
            // echo "luc.".$m[$key];
            // echo "</br>";
    
        }
    }
    // print_r($item);
    // echo "</br>";

    foreach ($m as $key => $item) {

        $n[] = array('name'=>$key,'price' => $item);

    }
        print_r($n);
        // echo "</br>";
        // print_r($m);
?>