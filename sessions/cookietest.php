<?php
include '../base.php';

# cookies are saved in the client browser

//var_dump($_COOKIE);
echo "<h1> {$_COOKIE['greeting']}</h1>";