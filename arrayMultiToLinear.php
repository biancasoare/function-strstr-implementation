<?php

/**
 * am transformat array-ul multidimensional intr-un array liniar
 */

$numbers = array(
    array(1,4,2,3),
    3,
    7,
    array(3,6,7)
);

/**
 * @param $arr
 * @return array
 */
function array_multi_to_linear($arr)
{
    static $rez;
    foreach($arr as $val)
    {
        if (is_array($val))
        {
            array_multi_to_linear($val);
        } else {
            $rez[] = $val;
        }
    }
    return $rez;
}
var_dump(array_multi_to_linear($numbers));
//----------------------------------------------------------------------------



$marfa = [
    "pantaloni"=>20,
    ["camasa"=>30, "bluza"=>10],
    "palton"=>30,
    ["pantaloni"=>30,"camasa"=>10],
    "pijama"=>15,
    "tricou"=>20
];

/**
 * @param $arr
 * @return array
 */
function arrayMultiToLinear($arr)
{
    if (!isset($rez))
        $rez = [];
    foreach($arr as $val)
    {
        if (is_array($val))
        {
            $rez = array_merge($rez, arrayMultiToLinear($val));
        } else {
            $rez[] = $val;
        }
    }
    return $rez;
}

var_dump(arrayMultiToLinear($marfa));
