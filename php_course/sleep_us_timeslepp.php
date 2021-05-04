<?php 

/*
$name = "nashaat";
echo "hello";
//sleep(5);
time_sleep_until(time()+5);
echo $name;
*/
function checkfile(){
if(file_exists("nashaat.txt")){
	echo "yes your file is exists";
}else{
	sleep(5);
	checkfile();

}

}
checkfile();