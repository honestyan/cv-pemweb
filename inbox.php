<?php
$json_store = file_get_contents("message.json");
$json_data = json_decode($json_store);
foreach($json_data as $data){
    echo "From: " . $data->email . "<br>";
    echo "Message: " . $data->message . "<br><br>";
}
?>