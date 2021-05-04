<?php
$array = array_fill(5,20,array("manar","nashaat","rania"));
echo "<pre>" ;
print_r($array);
echo "</pre>";

$array = array_fill(5,20,array_fill(0,4,"manar"));
echo "<pre>" ;
print_r($array);
echo "</pre>";