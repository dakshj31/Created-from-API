<?php 

$ch = curl_init();
 
// curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt_array($ch, [
    CURLOPT_URL => "https://openweathermap.org/api/weather?q=London&appid=28b2b5222db076ec8ec0529d6fb21d84",
    CURLOPT_RETURNTRANSFER => true
]);


$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";

?>