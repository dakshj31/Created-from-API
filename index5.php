<?php

require __DIR__ . '/vendor/autoload.php';

use Stripe\StripeClient;

$api_key = "sk_test_51QBgTCFWzlNf67Os8RuiotRKG42YrhY9w4FHUHg5llM6NPdsak3eAwYB8qAHLzxE0UrwtiWFmLgS3jL4DPfbvLen00xBf9dD37";

$data = [
    "name" => "oggy",
    "email" => "oggy@example.com"
];



$stripe = new \Stripe\StripeClient($api_key);

$customer = $stripe->customers->create($data);

echo $customer;

// $ch = curl_init();

// curl_setopt_array($ch, [
//     CURLOPT_URL => "https://api.stripe.com/v1/customers",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_USERPWD => $api_key,
//     CURLOPT_POSTFIELDS => http_build_query($data)
// ]);

// $response = curl_exec($ch);

// curl_close($ch);

// echo $response;