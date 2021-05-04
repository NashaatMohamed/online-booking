<?php
 
 $langs = array("html","html5","css","css3","js","jquary","wordpress");
 $randomkey = array_rand($langs,4);
 echo "<pre>" ;
print_r($randomkey);
echo "</pre>";
echo $langs[$randomkey[0]] . "<br>";
echo $langs[$randomkey[1]] . "<br>";
echo $langs[$randomkey[2]] . "<br>";
echo $langs[$randomkey[3]] . "<br>";
echo $langs[5];