<?php
echo "Hello world!!";
  
phpinfo();

$url = "https://localhost:8843/oauth2/userinfo";

$ch = curl_init($url);

// Ignore SSL certificate errors
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// Return the response instead of printing it
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    echo "Response:\n";
    echo $response;
}

curl_close($ch);
