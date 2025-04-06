<?php
$url = "https://localhost:8843/oauth2/userinfo";

// This should be set correctly — either read it from $_COOKIE or hardcode
$cookieValue = $_COOKIE['_oauth_proxy'] ?? 'your_cookie_value_here';

$ch = curl_init($url);

// Ignore SSL verification (for localhost)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Set the cookie in the header
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Cookie: _oauth_proxy=$cookieValue"
]);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "Response:\n$response";
}

curl_close($ch);

