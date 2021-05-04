<?php

	/*$workers = array("mohamed","ali","khaled",array("mahmoud","osama","logy"),"atef","hassan","nashaat");
	$workers[2]="mohsen1";
	$workers[]="mohsen2";
	$workers[]="mohsen3";
	$workers[]="mohsen4";
	$workers[]="mohsen5"; 
	$workers[]="mounir";
	echo "<pre>";
	print_r($workers);
	echo "</pre>";
	echo $workers[5] . "<br>";
	echo $workers[3][1];
	*/
	$langs = array("html","html5","css","css3","js","jquary","wordpress");
	/*echo "<ul>";
	foreach($langs as $lang){
		echo "<li>" . $lang . "</li>";
	}
	echo "</ul>";
	*/
	echo "<ul>";
	for($lang=0;$lang<=count($langs);$lang++){
		echo "<li>" . $langs[$lang] . "</li>"; 
	}
	echo "</ul>";