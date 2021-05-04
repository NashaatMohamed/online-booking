<?php
$link = __DIR__ . "/nashaat";
 $files = scandir($link,SCANDIR_SORT_DESCENDING);
 echo "<pre>";
 	print_r($files);
 echo "</pre>";
foreach($files as $file){
	if(is_file($link . "/" . $file)){
		unlink($link . "/" . $file);
	}
}