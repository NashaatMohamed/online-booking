<?php
	$workers = array("mohamed",
		"ali",
		"khaled",
		10,
		20,
		"atef",
		"hassan",
		"nashaat",
	);
	echo "<pre>" ;
print_r($workers);
echo "</pre>";
sort ($workers, SORT_STRING);
echo "<pre>" ;
print_r($workers);
echo "</pre>";
rsort ($workers);
echo "<pre>" ;
print_r($workers);
echo "</pre>";