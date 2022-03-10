<?php

session_start();

$_SESSION['username'] = "john123";

$_SESSION['age'] = 25;

echo "my new name is:  " . $_SESSION['username'] . "my age is:  " .  $_SESSION['age'];

echo"<br>";

echo "it is now set";

?>