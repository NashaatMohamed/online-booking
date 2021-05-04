<?php

session_start();

echo "hello " . $_SESSION["username"] . " your in room 3";
echo "<a href='page4.php'>kitchen</a>";