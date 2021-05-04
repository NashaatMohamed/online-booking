<?php
//copy(__FILE__,__DIR__ . "/MM/BACHUP.txt");
/*if(!copy("nashaat.txt","naat.txt")){
	echo "sorry no file";
}else{
	echo "file is here";
}

function copyme($extension){
	$original = __FILE__;
	copy ($original,$original . "." . $extension);
}
copyme ("bak");
*/
rename("naat.txt", __DIR__ . "/MM/natt.txt");