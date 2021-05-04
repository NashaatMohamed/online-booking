<?php
 
 	
 	/*
 	//str_replace(search,replace,string,count)//
$str = "i love php and i hate java so php my favorite language and java my bad language";

	 $str = str_replace(array("php","java"),array("python","cotlin"),$str,$i);
	 echo $str . "<br>" . $i;
	 
	 $str = explode(" ", $str);
	 echo "<pre>";
	 	print_r($str);
	 echo "</pre>";
	 $str = str_replace("php","python",$str);
	 echo "<pre>";
	 	print_r($str);
	 echo "</pre>";
	 $str = implode(" ",$str);
	 echo $str . "<br>";
	 $str = str_replace(array("language","java","php"),array("lang","cotlin"),$str);
	 echo $str;
		*/
$str = "line 1\n line 2\n\r line 3\n line4\n";
echo $str . "<br>";
$order = array("\n","\n\r","\r");
$str = str_replace($order,"<br>",$str);
echo $str;
