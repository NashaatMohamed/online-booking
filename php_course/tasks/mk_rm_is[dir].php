<?php
$file = "mohamed";
if(is_dir($file)){
	echo "the folder is exists";
	rmdir($file);
}else
{
	echo "no folder is here";
}