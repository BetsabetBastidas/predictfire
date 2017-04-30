<?php
$satelite_ = $_REQUEST['response_satellite'];
$region_ = $_REQUEST['response_region'];
$time_ = $_REQUEST['response_time'];
include 'Controler.php';
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
require_once __DIR__ . '/weather/bootstrap.php';

$cli = false;
$lf = '<br>';
if (php_sapi_name() === 'cli') {
    $lf = "\n";
    $cli = true;
}
$owm = new OpenWeatherMap();
$owm->setApiKey($myApiKey);
function DataWeather($param,$latitude,$longitude){
    $lang = 'de';
    $units = 'metric';
    $weather = $param->getWeather(array('lat' => $latitude, 'lon' => $longitude), $units, $lang);
    return $weather;
}


function Main($region, $api){
    Retrieval($region, Connect(), $api);
}
function Connect()
{
    $connect = mysqli_connect("localhost", "root","","SPACE_APP_CHALLENGER");
    if (!$connect) {
        die("Connection failed: " . $connect->connect_error);
    }
    return $connect;
}
function Retrieval($region, $string, $api){
    $data = array();
    $sql = "SELECT R.ID,
                  R.LATITUDE,
                  R.LONGITUDE,
                  R.BRIGHTNESS
                  
             FROM RECORD R
             JOIN REGION RE ON RE.ID = R.REGION
             WHERE RE.ID = $region AND R.ID < 50";
    $result = mysqli_query($string, $sql) or die(mysqli_error($string));
    while($row = mysqli_fetch_assoc($result))
    {
        $data[]= $row;
        array_push($data,DataWeather($api, $row['LATITUDE'], $row['LONGITUDE'])->wind->direction, DataWeather($api, $row['LATITUDE'], $row['LONGITUDE'])->wind->speed,DataWeather($api, $row['LATITUDE'], $row['LONGITUDE'])->temperature);
    }
    print_r($data);
}

Main(getRegion($satelite_,$region_,$time_), $owm);
