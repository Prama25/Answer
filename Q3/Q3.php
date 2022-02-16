<?php

// Read the JSON file
$json = file_get_contents('inventory_list.json');

// Decode the JSON file
$data = json_decode($json,true);

// Display data
print_r($data);

echo $data[0]["name"];

?>
