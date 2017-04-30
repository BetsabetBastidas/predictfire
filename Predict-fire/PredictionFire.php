<?php
$satelite_ = $_REQUEST['response_satellite'];
$region_ = $_REQUEST['response_region'];
$time_ = $_REQUEST['response_time'];
include 'Controler.php';
require_once __DIR__ . '/machine_learning/lib/accessory/matrix.php';
require_once __DIR__ . '/machine_learning/lib/parametric/regression.php';
function Regression($xs,$ys)
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
    $connect = mysqli_connect("localhost", "root","","SPACE_APP_CHALLENGER");
    if (!$connect) {
        die("Connection failed: " . $connect->connect_error);
    }
    return $connect;
}
function Retrieval($region, $string){
    $Measurements = array();
    $target = array();
    $sql = "SELECT R.ID,
                  R.LATITUDE,
                  R.LONGITUDE,
                  R.BRIGHTNESS    
             FROM RECORD R
             JOIN REGION RE ON RE.ID = R.REGION
             WHERE RE.ID = $region AND R.ID < 50 ORDER BY LATITUDE ASC ";
    $result = mysqli_query($string, $sql) or die(mysqli_error($string));
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($Measurements,array($row['LATITUDE'] ,$row['LONGITUDE']));
        //$Measurements = array(
          //  array($row['LATITUDE'] ,$row['LONGITUDE']));
        array_push($target, $row['BRIGHTNESS']);
    }
    echo 'estos datos representan el brighnes son los datos a emular';
    print_r($target);
    Regression($Measurements, $target);

}

Main(getRegion($satelite_,$region_,$time_));
