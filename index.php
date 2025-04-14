<?php
// Get all headers
$headers = getallheaders();

// Print all headers for debugging
echo '<pre>';
print_r($headers);
echo '</pre>';

// Extract the X-Forwarded-Access-Token header
$accessToken = $headers['X-Forwarded-Access-Token'] ?? null;

if ($accessToken) {
    // Prepare the OpenShift API URL
    $url = "https://api.okd4.vector-api.com:6443/apis/user.openshift.io/v1/users/~";

    // Initialize cURL
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $accessToken"
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // -k equivalent
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); // Also disable host verification

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        echo "OpenShift API Response:\n";
        echo $response;
    }

    // Close cURL session
    curl_close($ch);
} else {
    echo "X-Forwarded-Access-Token header not found.";
}
?>
