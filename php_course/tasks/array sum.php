<?php

$array = array(20,30,40,50,"60","osama",-3,11.5,true,false);
 $summation =array_sum($array);
 echo "<pre>" ;
print_r($array);
echo "</pre>";
echo $summation;
$langs= array(
		"html1" => "66%",
		"html1" => "66%",
		"html1" => "50%",
		"html2" => "69%",
		"html3" => "68%",
		"html4" => "67%",
		"html5" => "66%",
	);
echo "<pre>" ;
print_r($langs);
echo "</pre>";
$summation2 =array_sum($langs);
echo $summation2;