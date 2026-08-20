<?php

$a = 15;
$b = 32;
$c = 21;

if ($a >= $b && $a >= $c) {

    echo "O maior número é: " . $a;

} elseif ($b >= $a && $b >= $c) {

    echo "O maior número é: " . $b;

} else {

    echo "O maior número é: " . $c;

}

?>