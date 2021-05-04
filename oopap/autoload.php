<?php



spl_autoload_register(function($class){

		require "classes/" . $class . ".class.php";
});
$var = new testing2();
print_r($var);