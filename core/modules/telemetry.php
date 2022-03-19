<?php 
function sendTelemetry($url, $data) {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

if(Config::telemetry === true) {
    sendTelemetry(Config::whURL, array("content" => "\nЮзер зашёл:\n**Путь**: {$_SERVER['REQUEST_URI']}\n**UA**: {$_SERVER['HTTP_USER_AGENT']}\n**IP**: {$_SERVER['REMOTE_ADDR']}\n{$_SERVER['SCRIPT_FILENAME']}\n\n"));
}
