<?php

class student{
	public $count;
	public $ages;
	public function __construct($co,$ag){
		$this ->count = $co;
		$this ->ages =$ag;
	}
}
$secondry = new student("222","50year");
$primary =  clone $secondry;
$secondry ->count = "55";
$primary ->ages = "888 years old";

echo "<pre>";
print_r($secondry);
echo "</pre>";

echo "<pre>";
print_r($primary);
echo "</pre>";