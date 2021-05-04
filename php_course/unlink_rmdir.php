<?php

/*$file = "naat.txt";
if(file_exists($file) && is_writable($file)){
	unlink($file);	
}else{
	if(file_exists($file)){
		echo "sorry the file is read only please reload to remove the file";
		chmod($file, 0755);
	}
}
*/
$link =  __DIR__ . "/nashaat/naat.txt";
unlink($link);
rmdir("nashaat");