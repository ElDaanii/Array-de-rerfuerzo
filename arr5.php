<?php

$dupli = [1,2,3,3,4,5,6,7,6,8,9,9];
$tam = count($dupli);
$sindu = [];

for ($i = 0; $i < $tam; $i++){
    if (!in_array($dupli[$i], $sindu))
    $cuantas = 1;
    for ($j = $i+1; $j < $tam; $j++){
        if ($dupli[$i] == $dupli[$j])
        $cuantas++;
}
}

array_push($sindu, $dupli[$i]);
echo "el numero" .$dupli[$i] . "aparece" . $cuantas . "veces";
?>
