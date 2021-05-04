<?php


class iphone{
	//properity
public $ram 	= "2GB";
public $inch 	= "5 inch";
public $space	= "8 GB";
public $color	= "RED";
private $lock;
	//method
public function changspace($ra,$in,$spe,$co){
	$this ->ram 	= $ra;
	$this ->inch 	= $in;
	$this ->space 	= $spe;
	$this ->color 	= $co;
}
public function changlock($lo){
	$this ->lock = sha1($lo);
}
}
	//object

	$iphone6plus = new iphone(); //object 1
	$iphone6plus -> changspace("4GB","5.5 inch","32GB","GOLD");
	$iphone6plus -> changlock("mohamed");
	//$iphone6plus -> lock ="nashaat";
		echo "<pre>";
		var_dump($iphone6plus);
		echo "</pre>";
		echo $iphone6plus ->ram;
	$iphone7plus = new iphone(); // object2
	$iphone7plus -> changspace("8GB","7 inch","64GB","black");
		echo "<pre>";
		var_dump($iphone7plus);
		echo "</pre>";
