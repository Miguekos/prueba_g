<?php 
// $json = 'http://192.168.56.101:8086/query?db=donald&-format=json&u=miguel&p=alex&q=show%20databases';
// $json = file_get_contents('http://192.168.56.102:9200/glances/cpu/total/_source/');
// echo $json;
// $valor = $_GET['valor'];
// $url1 = 'http://192.168.0.103:61208/api/2/mem';
// $url1 = 'http://192.168.56.102:9200/glances/mem/'.$valor.'/_source/';
$url1 = 'http://192.168.56.102:9200/glances/mem/_search';
// $url1 = 'http://192.168.56.102:9200/glances/_search?pretty -H "Content-Type: application/json" -d '{  "query": {    "terms": {      "_id": [ "mem_critical" ]     }  }}'';


$cURL1 = curl_init();

curl_setopt($cURL1, CURLOPT_URL, $url1);
curl_setopt($cURL1, CURLOPT_HTTPGET, true);

curl_setopt($cURL1, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Accept: application/json'
));

$result1 = curl_exec($cURL1);


// $json = new stdClass();
// $records = array();
//      $entry = file_get_contents('http://192.168.56.103:8086/query?db=donals&u=miguel&p=alex&q=SELECT%20seconds%20FROM%20"localhost.uptime"%20ORDER%20BY%20DESC%20limit%201'); 
//      $records[] = $entry;
// $json->records = $records;

// $jsonEncoded = json_encode($json);

// // $jsonDecoded = json_decode($jsonEncoded);

// // var_dump($jsonDecoded, 'decoded');

// $jsonDecoded = json_decode($jsonEncoded, true);

// var_dump($jsonDecoded, 'decoded with true switch');


// print_r($jsonEncoded);


  // JSON string
  // $someArray = file_get_contents('http://192.168.56.103:8086/query?db=donals&u=miguel&p=alex&q=SELECT%20seconds%20FROM%20"localhost.uptime"%20ORDER%20BY%20DESC%20limit%201');

  // $someJSON = json_encode($someArray);
  // echo $someJSON['values'][0];
//   print_r ($someJSON);

//   Convert JSON string to Array
//   $someArray = json_decode($someJSON, true);
//   print_r($someArray);        // Dump all data of the Array
// //   echo $someArray[0]["name"]; // Access Array data
//   echo $someArray[0]["values"]; // Access Array data

//   // Convert JSON string to Object
//   $someObject = json_decode($someJSON);
//   print_r($someObject);      // Dump all data of the Object
//   echo $someObject[0]->values; // Access Object data




?>
