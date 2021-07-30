<?php

date_default_timezone_set('Australia/Sydney');

include_once './src/api-connection.php';
include_once './src/apiNasaConnection.php';

/**
 * Función para obtener la fecha y hora del día
 */

function get_date()
{
    return date('d-m-Y');
}

/** Devuelve una cadena de texto con la ropa en función de los grados del día
 */
function whatWearByDegrees()
{
    $degrees = getDegrees();

    if ($degrees <= 13)  {
        return "Ponte chándal y abrigo, hace frío";
    } elseif ($degrees <= 18) {
        return "Ponte sólo el chándal";
    } elseif($degrees <= 22) {
        return "Ponte mayas y una camiseta de mangas cortas";
    } elseif ($degrees <23) {

    } return "Ponte camiseta de manga corta y pantalón corto";
        
    return "";
}

function sesale()
{
    $weather = getWeather();

    return ($weather['group'] <= 7) ? false : true;
} 

/**Devuelve el icono del tiempo */
function icono()
{
    $weather = getWeather();
    return $weather['icon'];
}

/**Devuelve descripcion del tiempo*/
function description()
{
    $weather = getWeather();
    return $weather['description'];
}

/**
 * Devuelve la foto del día de la NASA
 */
function mediadia()
{
    $NasaImageDay = getNasaImageDay();
    return $NasaImageDay['url'];
}

function mediatypedia()
{
    $NasaImageDay = getNasaImageDay();
    return $NasaImageDay['media_type'];
}

function grados()
{
    $degrees = getDegrees();
    return $degrees;
}

function titlenasa()
{
    $NasaImageDay = getNasaImageDay();
    return $NasaImageDay['title'];
}

function explnasa()
{
    $NasaImageDay = getNasaImageDay();
    return $NasaImageDay['explanation'];
}

// var_dump($degrees);
// exit();
?>

