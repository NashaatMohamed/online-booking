<?php
//echo dirname(__FILE__);
$file = "nashaat.txt";
if (is_writable($file)){
	echo 'good file [ '. $file .' ]';
}else{
	echo "not here";
	file_put_contents($file,"nashaat is here");
}