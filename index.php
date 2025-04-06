<?php
// Print all cookies available to this PHP script
echo "Current Cookies:\n";
print_r($_COOKIE);

// Try to get the _oauth_proxy cookie from the array
$cookieValue = $_COOKIE['_oauth_proxy'] ?? 'your_cookie_value_here';

// Now do the cURL request
$url = "https://localhost:8843/oauth2/userinfo";

$ch = curl_init($url);

// Ignore SSL cert errors (localhost)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Send the _oauth_proxy cookie
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Cookie: _oauth_proxy=$cookieValue"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "Response from /userinfo:\n$response";
}

curl_close($ch);
