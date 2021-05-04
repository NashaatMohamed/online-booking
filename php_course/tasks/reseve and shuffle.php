<?php 
	$langs = array("html","html5","css","css3","js","jquary","wordpress");
	$array =array_reverse($langs,false);
	echo "<pre>" ;
	print_r($array);
	echo "</pre>";

	shuffle($langs);
	echo "<pre>" ;
print_r($langs);
echo "</pre>";