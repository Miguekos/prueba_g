<?php 

// $url1 = 'http://192.168.0.103:61208/api/2/mem';
$url1 = 'http://192.168.56.102:9200/glances/cpu/total/_source/';


$cURL1 = curl_init();

curl_setopt($cURL1, CURLOPT_URL, $url1);
curl_setopt($cURL1, CURLOPT_HTTPGET, true);

curl_setopt($cURL1, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result1 = curl_exec($cURL1);

?>
