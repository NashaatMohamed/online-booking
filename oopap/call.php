<?php

class mobile {
	public $name;
	public $ram;

	public function __call($namemethod,$params){
		
	}
}
$mobile = new mobile();
$mobile ->sayhello();
