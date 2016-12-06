<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

define("API_HOST_EURO", 'http://api.fixer.io/latest?base=EUR');
define("SUCCESS", 200);
define("TURISM_TAX", 0.20);

$client = new Client();
$response = $client->request('GET', API_HOST_EURO);

$euroRate = 3.71;
if ($response->getStatusCode() == SUCCESS) {
    $euroRateJson = json_decode($response->getBody()->getContents());
    $euroRate = $euroRateJson->rates->BRL + TURISM_TAX;
}
