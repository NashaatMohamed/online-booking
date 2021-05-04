<?php

session_start();
$_SESSION["username"] = "nashaat";
$_SESSION["favfood"] = "pizza";

echo '<a href="page2.php"> page2</a>';