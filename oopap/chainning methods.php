<?php


class names{
public function nashaat(){
	echo "nashaat" . "<br>";
	return $this;
}
public function mohamed(){
	echo "mohamed" . "<br>";
	return $this;
}
public function ahmed(){
	echo "ahmed" . "<br>";
	return $this;
}

}
$names = new names();
//$names ->nashaat();
//$names ->mohamed();
//$names ->ahmed();
$names ->nashaat()->mohamed()->ahmed();
echo "<pre>";
print_r($names);
echo "</pre>";