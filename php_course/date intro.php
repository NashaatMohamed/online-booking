<?php
/*
INTROOOOOOO
//echo time();
 date_default_timezone_set("Africa/Cairo");
 //echo date_default_timezone_get();
 //$nextmonth = time() + (30*24*60*60);
 $nextweek = time() + (7*24*60*60);
echo date("y-m-d  h-i-s" , $nextweek);
*/

//echo date("l jS \of F Y h:i:s p");
$time = time() + (6*30*24*60*60);
echo date('l jS \of F Y h:i:s a' , $time);
