<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    // Access data from $_GET array instead of $_POST
    $user = $_GET['username']; 
    $key = $_GET['password'];

    echo "<html><body>";
    echo "username: $user<br>";
    echo "password: $key<br>";
    echo "</body></html>";
?>