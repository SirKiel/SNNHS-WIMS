<?php
    session_start(); // Start the session
    // connect to database
    $conn = new mysqli("localhost", "root", "", "snnhs_wims");
    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // define global constants
    define ('INCLUDE_PATH', realpath(dirname(__FILE__) . '/Assets'));
?>
