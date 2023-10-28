<?php 

$dupli = [1,2,3,3,4,5,6,6,7,8,9,9];



$cont = 0;
while ($cont < 12) {
    
    $array = $dupli[$cont];

    if ($$dupli[$cont] == $$dupli[$cont]){
        echo "Los numeros coinciden en" .$dupli[$cont];
    }
    else {
        echo "Los numeros no coinciden";
    }
    $cont++;
}

?>