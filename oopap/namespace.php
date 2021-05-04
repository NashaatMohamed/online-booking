<?php


require "apple.php";
require "sony.php";
require "lg.php";


$iphone = new lg\createmobile();
$iphone ->sayhello();
print_r($iphone);