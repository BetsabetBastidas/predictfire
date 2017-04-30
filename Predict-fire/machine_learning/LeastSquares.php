<?php
require_once "../machine_learning/lib/accessory/matrix.php";
require_once "../machine_learning/lib/parametric/regression.php";
function testNormalRegression()
{
    $xs = array(array(-41.53,146.987),array(-41.296,147.766));

    $ys = array(303.4,302);// brignit
    $ner = new LL_NormalEquations_Regression($xs, $ys);
    $ner->train();
    $resultset = $ner->predict(array(-41.53,146.987));
    print_r($resultset);
}
testNormalRegression();