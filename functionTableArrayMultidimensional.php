<?php


/**
 * @param $array
 * @return string
 */
function writeTableMultidimensionalArray($array) {
    $switch = true;
    $tabel = '<table border="1">';
    foreach ($array as $cheie=>$valoare) {
        // setting alternate background color
        if (0 == $cheie%2){
            $color = '#dddddd';
        } else {
            $color = '#ffffff';
        } // end setting


        // write table head
        if ($switch){
            $tabel .= "\n" . '<tr>' . "\n";
            foreach ($valoare as $k=>$v){
                $tabel .= '<th>' . $k . '</th>';
            }
            $tabel .= "\n" . '</tr>' . "\n";
            $switch = false;
        } // end table head

        // write table rows
        $tabel .= "\n".'<tr style="background-color:' . $color . '">'."\n";
        foreach ($valoare as $val) {
            $tabel .= '<td>' . $val . '</td>';
        }
        $tabel .= "\n" . '</tr>' . "\n";
        // end table rows
    }

    $tabel .= '</table>';

    return $tabel;
}

//array multidimensional
$arr = array (
    array('nume' => 'Mihai', 'varsta' => 23, 'sex' => 'm'),
    array('nume' => 'Ioana', 'varsta' => 45, 'sex' => 'f'),
    array('nume' => 'Ion', 'varsta' => 22, 'sex' => 'm'),
    array('nume' => 'Maria', 'varsta' => 22, 'sex' => 'f')
);

echo (writeTableMultidimensionalArray($arr));


