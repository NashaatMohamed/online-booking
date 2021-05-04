<?php

session_start();
echo "hello " . $_SESSION["username"] . " you are beatiful";
echo "<a href='page6.php'>exit</a>";