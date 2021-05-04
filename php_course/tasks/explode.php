<?php
	$str = "form,learn,takefrom";
	 $arr = explode(",", $str);
echo $str;
	 echo "<pre>";
	print_r($arr);
	echo "</pre>";
	for($i=0;$i<count($arr);$i++){

		echo "<span class='tag'>" . $arr[$i] . "</span>";
	}
