<?php
	$str = "i love to w\ake up a't 6'clock \yesterday";
	echo $str . "<br />";
	$skhipped = addslashes($str);
	echo $skhipped . "<br />";
	$clear = stripslashes($skhipped);
	echo $clear . "<br />";
	
	$name = "nashaat <b> mohamed </b> i love <i>manar</i>";
echo $name . "<br />";
$skip = strip_tags($name,"<i>");
echo $skip;