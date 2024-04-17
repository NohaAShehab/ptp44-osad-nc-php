<?php

include "../base.php";

var_dump($_COOKIE);


# create cookie
setcookie("greeting", "Hello from ghaza", time() +3600, "/", "", 0);

# setcookie(cookiename, value, lifetime , path )
setcookie("phpcookie", "noha", time() +3600, "/os44-nc-php/day03/sessions", "", 0);


