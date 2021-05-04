<?php
/*
str_splite(string,lenght)
	$str = "mohamed ahmed mahmoud ibrahim";
	$arr = str_split($str,100);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	*/
	// chunk_splite(string,lenght[76],end[/n /r])//
	$str = "mohamedahmedmahmoudibrahim";
	 	$spe = chunk_split($str,76," @ ");
	 	echo $spe;