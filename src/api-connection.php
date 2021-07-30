<?php

$apiResponse = null;
$apiInfo = [
    'Key' => 'fed2bc6f945d6bc9b0d0ede3a10fb4be',
    'City' => 'Sydney',
    'ZipCode' => 2022,
    'CountryCode' => 'AU',
    'Units' => 'metric',
    'Cnt' => '3',
    'Lang' => 'es',
    'Entrypoint' => 'https://api.openweathermap.org/data/2.5/forecast?q=%s&appid=%s&units=%s&cnt=%s&lang=%s',
];

/**
* CODEs
*
* https://openweathermap.org/weather-conditions#Weather-Condition-Codes-2
*/

function initAPI()
{
    try {
        global $apiResponse, $apiInfo;

        if ( null != $apiResponse ) {
            return $apiResponse;
        }

        // create & initialize a curl session
        $curl = curl_init();

        // $location = $apiCity;
        $location = sprintf('%s, %s', $apiInfo['ZipCode'], $apiInfo['CountryCode']);

        // set our url with curl_setopt()
        curl_setopt(
            $curl,
            CURLOPT_URL,
            sprintf($apiInfo['Entrypoint'], $location, $apiInfo['Key'], $apiInfo['Units'], $apiInfo['Cnt'], $apiInfo['Lang'])
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

        $jsonData = json_decode($output, true);

        if (200 != $jsonData['cod']) {
            echo "Error en el API: " . $jsonData['message'];
            exit();
        }

        // define time to return
        $fromDateTime = new DateTime('06:30:00');
        $activeForecast = null;
        foreach($jsonData['list'] as $item) {
            $date = new DateTime();
            $date->setTimestamp($item['dt']);

            if ( $date > $fromDateTime ) {
                $activeForecast = $item;
                break;
            }
        }

        $apiResponse = [
            'forecast' => $activeForecast,
            'city' => $jsonData['city'],
        ];

        return $apiResponse;

    } catch (\Throwable $th) {
        echo "Error en el API \n";
        var_dump($th);
        exit();
    }
}

/**
* return float with degrees
*/
function getDegrees(): float
{
    $apiResponse = initAPI();

    return $apiResponse['forecast']['main']['feels_like'];
}

/**
* return array with weather info
* group: int
* code: int
* main: string
* description: string
* icon: string URL
*/
function getWeather(): array
{
    $apiResponse = initAPI();

    $weather = $apiResponse['forecast']['weather'][0];

    return [
        'group' => intval(substr($weather['id'], 0, 1)),
        'code' => $weather['id'],
        'main' => $weather['main'],
        'description' => $weather['description'],
        'icon' => sprintf('http://openweathermap.org/img/wn/%s@2x.png', $weather['icon']),
    ];
}

function getForeCastDatetime()
{
    $apiResponse = initAPI();

    return $apiResponse['forecast']['dt_txt'];
}

function getForeCastCity()
{
    $apiResponse = initAPI();

    return $apiResponse['city'];
}