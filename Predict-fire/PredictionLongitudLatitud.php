<?php
$satelite_ = $_REQUEST['response_satellite'];
$region_ = $_REQUEST['response_region'];
$time_ = $_REQUEST['response_time'];
include 'Controler.php';
require_once _DIR_ . '/machine_learning/lib/accessory/matrix.php';
require_once _DIR_ . '/machine_learning/lib/parametric/regression.php';
function RegressionLongitude($xs,$ys)
{
    $predict = array();
    $ner = new LL_NormalEquations_Regression($xs, $ys);
    $ner->train();
    foreach ($xs as $value) {
       array_push($predict, $ner->predict(array($value[0],$value[1])));
    }
    echo 'estos datos son las prediccion aun tienen cierta porcentaje de error';
    print_r($predict);
}

function Main($region){
    Retrieval($region, Connect());
}
function Connect()
{
    $connect = mysqli_connect("localhost", "root","root","SPACE_APP_CHALLENGER");
    if (!$connect) {
        die("Connection failed: " . $connect->connect_error);
    }
    return $connect;
}
function Retrieval($region, $string){
    $Measurementslongitude = array();
    $Measurementslatitude= array();
    $targetlongitude = array();
    $targetlatitude = array();
    $sql = "SELECT R.ID,
                  R.LATITUDE,
                  R.LONGITUDE,
                  R.BRIGHTNESS,
                  R.FRP   
             FROM RECORD R
             JOIN REGION RE ON RE.ID = R.REGION
             WHERE RE.ID = $region AND R.ID < 50 ORDER BY LATITUDE ASC ";
    $result = mysqli_query($string, $sql) or die(mysqli_error($string));
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($Measurementslongitude,array($row['LATITUDE'] ,$row['BRIGHTNESS']));
        array_push($Measurementslatitude,array($row['LONGITUDE'] ,$row['BRIGHTNESS']));

        array_push($targetlongitude, $row['LONGITUDE']);
        array_push($targetlatitude, $row['LATITUDE']);
    }
    echo 'estos datos representan el brighnes son los datos a emular';
    print_r($targetlatitude);
    //RegressionLongitude($Measurementslongitude, $targetlongitude);
    RegresionLatitude($Measurementslatitude, $targetlatitude);
}

function RegresionLatitude($xs,$ys){
    $predict = array();
    $ner = new LL_NormalEquations_Regression($xs, $ys);
    $ner->train();
    foreach ($xs as $value) {
        array_push($predict, $ner->predict(array($value[0],$value[1])));
    }
    print_r($predict);
}

Main(1);