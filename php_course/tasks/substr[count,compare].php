<?php 
	$str = "i love php so my favourite language php not python beasause php is beatiful";
	$counter = substr_count($str,"php",10,53);
	echo $counter . "<br />";
	$str1 = "hello Osama";
	$str2 = "osama";
	echo substr_compare($str1,$str2,0,7,true);