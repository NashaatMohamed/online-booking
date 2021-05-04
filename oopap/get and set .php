<?php

class mobile{
	public $ram;
	public $name;
	private $coloring;
/* public function __get($prop){
	echo "your proprty you useed [" . $prop . "] is not found or not accessiable" . "<br>" ; 

}
*/
public function __set($prop,$val){
	echo "your proprty is used [ " . $prop . " ] is not found " . "<br>" ;
	echo "error value [ " . $val . " ] not found" . "<br>" ;
}
}

$mobile = new mobile();
$mobile ->coloring = "red" ;
$mobile ->price = "2000$$";
echo "<pre>";
print_r($mobile);
echo "</pre>";