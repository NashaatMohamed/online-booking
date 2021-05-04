<?php


 class father{
	//property
	public $lenght;
	public $color;
	public $smart;
	public $price = "$500";

	//method
	public function feauters($le,$co,$sm){
		$this ->lenght =$le;
		$this ->color 	=$co;
		$this ->smart 	=$sm;
	}
}
class son extends father{
	public $size;
	public $eyes;
	public $lenght;

	public function feauters($le,$co,$sm){
		$this ->lenght =$le;
		$this ->color 	=$co;
		$this ->smart 	=$sm;
	}
	public function feauterson($si,$ey){
		$this ->size 	=$si;
		$this ->eyes 	=$ey;
}
}

$fath = new father();
$fath ->feauters("160","white","beatiful");
$fath ->price = "$400";
echo "<pre>";
print_r($fath);
echo "</pre>"; 

$so = new son();
$so ->feauters("160","white","beatiful");
$so  ->feauterson("80","black");
echo "<pre>";
print_r($so);
echo "</pre>"; 