<?php 

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.github.com/gists/46ee5a9354b7e55503e348ef60505166",
    CURLOPT_RETURNTRANSFER => true,
    // CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "dakshj31",
    // CURLOPT_CUSTOMREQUEST => "POST",
    // CURLOPT_POSTFIELDS => "$payload"
]);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);
print_r($data);

// foreach ($data as $gist){

//     echo $gist["id"], " - ", $gist["description"], "/n";
// }