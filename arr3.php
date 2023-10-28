<?php

$todo = [1,2,3,4,5,6,7,8,9];
$tam = count($todo);
$par = [];
$impar = [];


 foreach ($todo as $value) {
if (($value % 2) == 0) {
    array_push($par, $value);
} else {
    array_push($impar, $value);
}
}

echo "El array original";
echo implode("-", $todo);
echo "<br>";
echo "Array de pares";
echo implode("-", $par);
echo "<br>";
echo "Array de impares";
echo implode("-", $impar);
echo "<br>";
?>