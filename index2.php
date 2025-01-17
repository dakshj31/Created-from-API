<?php 

$ch = curl_init();

$headers = [
    "Authorization: token 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"
];

$payload = json_encode([
    "name" => "Created from API",
    "description" => "an example API-created repo"
]);
 
curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/user/repos",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "dakshj31",
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "$payload"
]);


$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";

?>