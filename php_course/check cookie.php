<?php

setcookie("nashaat","test",time()+360,"/");
if(count($_COOKIE > 0)){
	echo "good cookie install in your pc";
}else{
	echo "sorry not contact please enable cookie in your browser";
}