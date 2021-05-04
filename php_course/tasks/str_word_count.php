<?php
	$str = "nashaat mihamed ahmedmohamed & mahlawy";
	echo $str . "<br />";
	$count = str_word_count($str,2,"&");
	echo "<pre>";
	print_r($count);
	echo "</pre>";
