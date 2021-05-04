<?php

session_start();
echo "hello " . $_SESSION["username"] . " how are you " . "<br/>" ;
echo "hello " . $_SESSION["username"] .  " your favfood "  . $_SESSION["favfood"] . "<br />" ;
echo "<a href='page3.php'>page3</a>";
