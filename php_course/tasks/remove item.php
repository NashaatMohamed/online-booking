<?php
	$workers = array("mohamed","ali","khaled","atef","hassan","nashaat");
	echo "<pre>" ;
print_r($workers);
echo "</pre>";
	$lastitem = array_shift($workers);
	echo "<pre>" ;
print_r($workers);
echo "</pre>";
echo "$lastitem";