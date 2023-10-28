<?php

$todo = [1,2,3,4,5,6,7,8,9];
$tam = count($todo);
$bidi = [[],[]];


 foreach ($todo as $value) {
if (($value % 2) == 0) {
    array_push($bidi[0], $value);
} else {
    array_push($bidi[1], $value);
}
}

echo "Par del array";
echo implode("-", $bidi[0]);
echo "<br>";
echo "Impar del array";
echo implode("-", $bidi[1]);

?>