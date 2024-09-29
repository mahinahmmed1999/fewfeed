<?php
// Set headers to allow cross-origin requests
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Your data
$data = array(
    "success" => true,
    "token" => '0efa5508e7d0a60b16e8c88553b49606d1ac65a1'
);

// Convert data to JSON format
$json = json_encode($data);

// Output JSON
echo $json;
?>
