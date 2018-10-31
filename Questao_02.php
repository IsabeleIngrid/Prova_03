<?php
// put your code here

$matriz_01 = array(
    array(10, 20, 30),
    array(10, 20, 20),
    array(10, 10, 20)
);
$matriz_02 = array(
    array(1, 2, 3),
    array(1, 1, 1),
    array(2, 2, 2)
);

somaItensDasMatrizesBidimensionais($matriz_01, $matriz_02);


function somaItensDasMatrizesBidimensionais($array, $array2){
    

   

    for ($row = 0; $row < 4; $row++) {
        for ($col = 0; $col < 4; $col++) {
            $array = ($array[$row][$col]) + ($array2[$row][$col]);
            echo '<br>';
        }
    }
}
 

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Linha: $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 4; $col++) {
        echo  $array[$row][$col];
    }
    echo "</ul>";
}



