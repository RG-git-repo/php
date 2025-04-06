<?php
// Print all cookies available to this PHP script
echo "Current Cookies:\n";
print_r($_COOKIE);

// Get all headers
$headers = getallheaders();

// Print all headers
echo '<pre>';
print_r($headers);
echo '</pre>';

// Try to get the _oauth_proxy cookie from the array
$cookieValue = $_COOKIE['_oauth_proxy'] ?? 'your_cookie_value_here';

// Now do the cURL request
$url = "https://localhost:8843/oauth2/userinfo";


