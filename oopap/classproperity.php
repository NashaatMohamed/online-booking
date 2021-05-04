<?php

class appledevice{
	// properity
	public $ram = "1 GB";
	public $space = "16 GB";
	public $color = "WHITE";
	public $inch = "3 INCH";
	public $name;
	// constant
	const ownername = 5 ;
	// methods
	public function doubleclick(){

//echo "no no non non" . $this->ram;
		if(strlen($this->name) < self ::ownername){
			echo "sorry your name must larger than " . self ::ownername . " chars";
		}else{
			echo "succes your name is set";
		}
	}

}

$apple6plus = new appledevice(); //object from class
$apple6plus ->ram = "2 GB";
$apple6plus ->space = "32 GB";
$apple6plus ->color = "GOLD";
$apple6plus ->inch = "5 INCH";
$apple6plus ->name = "nas";
$apple6plus ->doubleclick(); //method
echo appledevice ::ownername;
echo $apple6plus ::ownername;
echo "<pre>";
var_dump($apple6plus);
echo "</pre>";

$apple7plus = new appledevice(); // other object from the same class
$apple7plus ->ram = "6 GB";
$apple7plus ->space = "64 GB";
$apple7plus ->color = "RED";
$apple7plus ->inch = "8 INCH";
$apple7plus ->lenght = "55";
$apple7plus ->name = "mohamed";
$apple7plus ->doubleclick(); //method
echo "<pre>";
var_dump($apple7plus);
echo "</pre>";
// [-> ] = object operator