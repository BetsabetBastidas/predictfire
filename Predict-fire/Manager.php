<?php

function Request($string, $reg)
{
    $region = $reg;
    $flag = 0;
    $file = fopen("data.csv", "r");
    while (!feof($file)) {
        $data[] = fgets($file);
        $value = explode(",",$data[$flag]);
        if ($flag>0){
            mysqli_query($string,"INSERT INTO RECORD (`ID`, `LATITUDE`, `LONGITUDE`, `BRIGHTNESS`, `SCAN`, `TRACK`, `ACQ_DATE`, `ACQ_TIME`, `SATELLITE`, `CONFIDENCE`, `VERSION`, `BRIGHT`, `FRP`, `DAYNIGHT`, `REGION`) VALUES ('', '".$value[0]."', '".$value[1]."', '".$value[2]."', '".$value[3]."', '".$value[4]."', '".$value[5]."', '".$value[6]."', '".$value[7]."', '".$value[8]."', '".$value[9]."', '".$value[10]."', '".$value[11]."', '".$value[12]."', '".$region."')");
        }
        $flag++;
    }
    fclose($file);
    mysqli_close($string);
    unlink('data.csv');

}
function assert_data()
{
    if (!file_exists('data.csv'))
    {
        die("File not found. Make sure you specified the correct path.");
    }
}
function Connect()
{
    $connect = mysqli_connect("localhost", "root","","SPACE_APP_CHALLENGER");
    if (!$connect) {
        die("Connection failed: " . $connect->connect_error);
    }
    return $connect;
}
function StatisticsWorld()
{
    $string = Connect();

}
function Main($reg)
{
    $string = Connect();
    Request($string,$reg);
}
