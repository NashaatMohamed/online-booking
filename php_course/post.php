<?php

$admins = array("nashaat","manar","rania");
echo $_SERVER["REQUEST_METHOD"];
$username = $_POST["username"];
if (in_array($username,$admins)){

	echo "welcome my admin";
}else{
	echo "your not in my admins names";
}