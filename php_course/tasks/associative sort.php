<?php
$workers = array(
		"mohamed" => 700,
		"ali" => 800 ,
		"khaled" => 900,
		"atef"=> 1000,
		"hassan"=> 500,
		"nashaat"=>600,
	);
	echo "<pre>" ;
print_r($workers);
echo "</pre>";

asort($workers);
echo "<pre>" ;
print_r($workers);
echo "</pre>";

arsort($workers);
echo "<pre>" ;
print_r($workers);
echo "</pre>";

ksort($workers);
echo "<pre>" ;
print_r($workers);
echo "</pre>";

krsort($workers);
echo "<pre>" ;
print_r($workers);
echo "</pre>";