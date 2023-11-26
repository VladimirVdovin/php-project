<?php
require_once "functions.php";

function calcMinusPlus($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $res = calcMinusOne($arr[$i]) +  calcPlusFive($arr[$i]);
        $arr[$i] = $res;
    }
    return $arr;
}
