<?php

    echo  "<h1> Response received </h1>";

    echo "<h1>Display content of request payload </h1>";

    # super global variable $_REQUEST  # contain the request info

    # use function var_dump
    var_dump($_REQUEST);

    # get querystring paramenters
    echo "<h1> get Query string </h1>";
    var_dump($_GET);

    # get form data
    echo "<h1> get form data  </h1>";
    var_dump($_POST);
