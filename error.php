<?php
// Enable error reporting for all types of errors
error_reporting(E_ALL);

// Display errors on the page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

// Example to trigger an error
echo $undefined_variable;
?>
