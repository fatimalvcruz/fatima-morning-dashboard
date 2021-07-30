

<?php

$apiNasaResponse = null;
$apiNasaInfo = [
'Key' => 'YX8T5dmW2tFM4c6lYkkdcbfs8xgVSeSZV3AZVO3h',
'Count' => 5,
'Entrypoint' => 'https://api.nasa.gov/planetary/apod?api_key=%s',
];

/**
* CODEs
*
* https://openweathermap.org/weather-conditions#Weather-Condition-Codes-2
*/

function initNasaAPI()
{
try {
global $apiNasaResponse, $apiNasaInfo;

if ( null != $apiNasaResponse ) {
return $apiNasaResponse;
}

// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt(
$curl,
CURLOPT_URL,
sprintf($apiNasaInfo['Entrypoint'], $apiNasaInfo['Key'], $apiNasaInfo['Count'])
);

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);

if ( ! $output) {
echo "Error en el API";
exit();
}

$apiNasaResponse = json_decode($output, true);

return $apiNasaResponse;

} catch (\Throwable $th) {
echo "Error en el API \n";
var_dump($th);
exit();
}
}

/**
* Return image of the day info. Returned info:
* copyright
* date
* explanation
* hdurl
* media_type
* service_version
* title
* url
*/
function getNasaImageDay()
{
$apiResponse = initNasaAPI();

return $apiResponse;
}
