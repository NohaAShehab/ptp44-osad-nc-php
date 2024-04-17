<?php
# any file you use $_SESSION you must start the session at the beginning of the file

include "../base.php";
# destroy session ---> between server and user

session_start();  # check session --> create /// use it

    unset($_SESSION['login']);
    setcookie("PHPSESSID", "", time() - 3600, "/" , "", 0);
session_destroy();  # I am no longer needs

echo "logged out successfully";

echo "<a href='loginform.php' class='btn btn-primary'> login  </a>";





