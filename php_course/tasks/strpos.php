<?php
// strpos(string,find,offest[option])
$str = "nashaat mohamed ahmed mohamed ahmed nashaat is so cool manar";
$position = strpos($str,"ahmed",15);
echo $position . "<br />";
$pos = strrpos($str,"nashaat",-10);
echo $pos;