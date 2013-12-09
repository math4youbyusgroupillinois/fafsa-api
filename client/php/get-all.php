<?php

$appid = '[your app id]';
$appkey = '[your app key]';

$fields = "fafsa_id,last_name,first_name,students_email_address";

$url = 'http://fafsa.api.publicprivatesector.org/applications/?appid=' . $appid . '&appkey=' . $appkey . '&fields=' . $fields;

$http = curl_init();  
curl_setopt($http, CURLOPT_URL, $url);  
curl_setopt($http, CURLOPT_RETURNTRANSFER, 1);   

$output = curl_exec($http);
$http_status = curl_getinfo($http, CURLINFO_HTTP_CODE);
$info = curl_getinfo($http);
//var_dump($info);

echo $output;

curl_close($http);

?>
