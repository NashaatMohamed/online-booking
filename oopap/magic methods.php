<?php


class computer{
	public $ram;
	public $name;

	public function computername(){

	}

	public function __construct($ra,$na){
		$this ->ram = $ra;
		$this ->name =$na;
		echo "welcome " . $na . " your laptop have " . $ra ." ram" ;
	}
}
class hp extends computer{

}

$computer = new computer("2GB","DELL");
$computer ->computername();
echo "<pre>";
print_r($computer);
echo "</pre>";

$hp = new hp("4GB","hp");
