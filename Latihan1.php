<?php
function tukar(&$a, &$b){
    $c = $a;
    $a = $b;
    $b = $c;
}
$a = 6;
$b = 7;
echo "Sebelum ditukar : ($a, $b) <br>";
tukar($a, $b);
echo "Sesudah ditukar : ($a, $b) <br>";
?>