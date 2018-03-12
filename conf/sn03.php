<?php


$item = $_GET['item'];
$id = $_GET['id'];
$url = 'http://192.168.56.102:9200/glances/'.$item.'/'.$id.'/_source';

$cURL = curl_init();

curl_setopt($cURL, CURLOPT_URL, $url);
curl_setopt($cURL, CURLOPT_HTTPGET, true);

curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result = curl_exec($cURL);

?>