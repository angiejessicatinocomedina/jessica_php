<?php
//sorteo de un casino 4espada, 1corazon, 3trevol y 2diamante.
$casino=rand(1,4);
echo "El valor sorteado es : " . $casino;
echo "</br>";
echo "<hr>";


if ($casino==1) {
    echo "</br> LA CARTA SORTEADA ES CORAZON";
}

else {
    if ($casino==2) {
        echo "</br> lA CARTA SORTEADA ES DIAMANTE"; 
    }
    else {
       if ($casino==3) {
        echo "</br> LA CARTA SORTEADA ES TREBOL"; 
       }
       else {
        echo "</br> LA CARTA SORTEADA ES ESPADA"; 
       }
    }
  


}
?>