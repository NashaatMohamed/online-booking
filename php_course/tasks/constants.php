<?php

define("SITE_STATUS", "OPEN");
if (SITE_STATUS == "OPEN") {
$firstname="nashaat";
echo $firstname . "<br>";
define("FIRST_NAME","manar",false);
echo FIRST_NAME;
echo "<br>";
$firstname="mohamed";
echo $firstname . "<br>";
define("LAST_NAME","ahmed",true);
echo LAST_Name . "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __file__;
echo "<br>";
echo __dir__;
} else{
	echo "web site not found";
}