
<?php

// Get all environment variables
$env_vars = $_SERVER;

// Remove unnecessary entries (optional)
unset($env_vars['SCRIPT_FILENAME'], $env_vars['SERVER_SOFTWARE']);

// Print environment variables
echo "<h1>Environment Variables</h1>";
echo "<pre>";
print_r($env_vars);
echo "</pre>";

?>