<?php
    // require a config.php file in the model folder
    // have access to the variables int the config.php file
    require_once(__DIR__ . "/../model/config.php");

    // Redirects to the Login Page
    header("Location: " . $path . "login.php");
    
?>