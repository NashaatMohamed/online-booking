<?php
$str = "nashaat mohamed ahmed mohamed";
//strstr(string,search,before_search)
$found = stristr($str,"moHamed",true);
echo $found;