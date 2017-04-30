<?php
   require_once "../lib/accessory/matrix.php";
   require_once "../lib/parametric/regression.php";

function testNormalRegression()
{

    $xs = array(
        array(1,1,5,9),
        array(1,2,9,9),
        array(1,3,9,9),
        array(1,4,9,3)
    );
    $ys = array(2,4,6,8);

    $ner = new LL_NormalEquations_Regression($xs, $ys);
    $result = $ner->train();
    print_r($result);
}

testNormalRegression();

