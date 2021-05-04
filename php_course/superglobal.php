<?php

$name = "nashaat"; // global variable

function test(){
$name = "mohamed"; // local variable
echo $name . "<br />";
echo  $GLOBALS["name"];
}
test();
