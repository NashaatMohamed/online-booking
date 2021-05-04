<?php


$dsn = 'mysql:host= localhost;dname=test' ;
$user = 'root';
$pass = "";

try{

	$db = new PDO($dsn,$user,$pass);
	echo "you are connected";
}
catch(PDOException $e){
	echo "faile" . $e->getmessage();

}