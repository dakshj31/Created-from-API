<?php

require __DIR__ . '/vendor/autoload.php';
// use GuzzleHttp\Client;

$client = new GuzzleHttp\Client;
// $client = new Client();

$response = $client->request("GET", "https://api.github.com/user/repos", [
    "headers" => [
        "Authorization" => "token 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",
        "User-Agent" => "dakshj31"
    ]
]);

echo $response->getStatusCode(), "\n";

echo $response->getHeader("content-type")[0], "\n";

echo substr($response->getBody(), 0, 200), "...\n";