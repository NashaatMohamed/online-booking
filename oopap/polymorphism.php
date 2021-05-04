<?php


interface mobile{

	public function getuser();
	public function getadmin();
	public function showstats();
}

class iphone implements mobile{

public function getuser(){
	echo "select the user ";
}
	public function getadmin(){
		echo " select the admin";
	}
	public function showstats(){
		echo "get the stats ";
	}

}
class sony implements mobile{
	public function getuser(){
	echo "select the user ";
}
	public function getadmin(){
		echo " select the admin";
	}
	public function showstats(){
		echo "get the stats ";
	}

}

$iphone = new iphone();
$iphone ->getuser();
$iphone ->getadmin();
$iphone ->showstats();
echo "<pre>";
print_r($iphone);
echo "</pre>";


$sony = new sony();
$sony ->getuser();
$sony ->getadmin();
$sony ->showstats();
echo "<pre>";
print_r($sony);
echo "</pre>";