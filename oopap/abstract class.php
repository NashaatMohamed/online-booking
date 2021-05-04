<?php


abstract class makedevice{

	public $ram;

	public function appledevice(){
		echo "success";

	}
	abstract public function saybye();
	abstract public function goodmornning($name);
	
}
class sayhello extends makedevice{

	public function saybye(){
		echo "bla bla bla ";
	}
	public function goodmornning($name){
		echo "welcome to " . $name ;
	}
}
$sony = new sayhello();
$sony ->saybye();
$sony ->goodmornning("nashaat");
echo "<pre>";
print_r($sony);
echo "</pre>";