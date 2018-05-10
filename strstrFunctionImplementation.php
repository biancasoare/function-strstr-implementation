<?php
/**
 * Created by PhpStorm.
 * User: soarebianca
 * Date: 09/05/2018
 * Time: 22:11
 */


var_dump(mystrstr('ana are merer', 'rr'));
echo "<br/>";
var_dump(strstr('ana are merer', 'rr'));

/**
 * @param $haystack
 * @param $pattern
 * @return bool|string
 */
function mystrstr($haystack, $pattern)
{
    $i = 0;
    $j = 0;
    $rez = '';
    $found = false;
    if (!$pattern || !$haystack) {
        return false;
    }
    while (isset($haystack[$i])) {
        //echo "i = $i j = $j haystack = " . $haystack[$i] . ' pattern = ' . (isset($pattern[$j]) ? $haystack[$j] : $haystack[$j-1] ). ' rez = ' . $rez . " found " . (string) $found .PHP_EOL ;
        if (!isset($pattern[$j])) {
            $found = true; // daca ajunge la capatul pattern-ului inseamna ca $found este true
        }

        if ($found) {
            $rez .= $haystack[$i];
        } elseif ($haystack[$i] == $pattern[$j]) {
            $j++;
            $rez .= $haystack[$i];
        } else {
            $j = 0;
            $rez = '';
        }
        $i++;
    }

    return !$found || $rez=='' ? false : $rez;
}

