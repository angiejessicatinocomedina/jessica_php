<?php

$valor=rand(1,10);
echo "El valor sorteado es : " . $valor;
echo "</br>";
echo "</br>";

if ($valor<5) {
    echo "Es menor que 5";
}
else {
    echo "Es mayor que 5 ";
}

?>