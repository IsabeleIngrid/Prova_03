<?php

$matriz1 = array(
    array(1,2),
    array(3,4)
);
$matriz2 = array(
    array(1,2),
    array(3,4)
);
comparaTabelas($matriz1, $matriz2);
function comparaTabelas($matriz1,$matriz2){
    
   
    for ($row = 0; $row < 3; $row++) {
        for ($col = 0; $col <3; $col++) {
            
            if($matriz1[$row][$col]!=$matriz2[$row][$col]){
                echo "As matrizes sao diferentes o itemesta diferente";
                
        }
        
        
        
    }
}
}
    
    

        
        
        

