<?php
$TARGET = 'home/hqqqh7h7lc3p/public_html'; // The path to the directory containing your repo
$SECRET_KEY = 'Yahashvi@123'; // Use the same secret as in the GitHub webhook settings
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

// Collect the data from the request
$payload = file_get_contents('php://input');

// Calculate hash based on the payload and the secret key
list($algo, $hash) = explode('=', $signature, 2);
$payloadHash = hash_hmac($algo, $payload, $SECRET_KEY);

// Verify the payload
if (hash_equals($hash, $payloadHash)) {
    // The payload is authenticated
    // Now you can pull from the repository
    shell_exec("cd $TARGET && git pull");
    echo 'Deployment successful.';
} else {
    // Log for manual investigation
    die('Invalid signature.');
}
?>
