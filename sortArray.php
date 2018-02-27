<?php
/**
 * a) am generat un vector $arr_rand care contine 40 de numere intregi cuprinse intre 0 si 100,
 * iar pentru asta am folosit functia rand();
 * b) apoi am ordonoat crescator acest vector;
 *
 * functia rand(min,max) genereaza un numar intreg intre min si max inclusiv
 */


echo "<h5>a) random array</h5>";
for ($i = 0; $i < 40; $i++)
{
    $arr_rand[$i] = rand(0,100);
}
// putem vedea cele 40 de nr generate aleator de la 0 la 100 de functia rand()
//var_dump($arr_rand);




echo "<h5>b) sort array</h5>";
/**
 * ordonare array cu for in for
 */

for ($i=0; $i<count($arr_rand); $i++)
{
    for($j=$i+1; $j<count($arr_rand); $j++)
    {
        if ($arr_rand[$j] < $arr_rand[$i])
        {
            // interschimbam elementele intr ele
            // $aux este o variabila ajutatoare pe care o folosim la interschimbare
            $aux = $arr_rand[$i];
            $arr_rand[$i] = $arr_rand[$j];
            $arr_rand[$j] = $aux;

        }
    }
}

var_dump($arr_rand);
//----------------------------------------------------------------------------------





/**
 * ordonare array cu for in do while
 */

do {
    $sorted = true; //presupunem ca exista mutari de facut in array
    for ($i=0; $i<count($arr_rand)-1; $i++){ //se verifica conditia si daca e true se executa; $i este cheia fiecarui element din array

        if ($arr_rand[$i] > $arr_rand[$i+1]) {
            $x = $arr_rand[$i+1];
            $arr_rand[$i+1] = $arr_rand[$i];
            $arr_rand[$i] = $x;
            $sorted = false; //presupunem ca nu mai exista mutari de facut in array si se verifica iar conditia din for

        }
    }
}  while ($sorted == false);

var_dump($arr_rand);


























