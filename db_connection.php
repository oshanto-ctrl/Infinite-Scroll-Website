<?php

// Database Host Name
define('DB_HOST', 'localhost');

// Database Username
define('DB_USER', 'root');

// Database Password
define('DB_PASS', '');

// Database Name
define('DB_NAME', 'infinite_scroll_db');

// Try to make a connection
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// If no connection established. Show error message.
if (!$link) {
    die("Error Occured." . mysqli_connect_error());
}


?>