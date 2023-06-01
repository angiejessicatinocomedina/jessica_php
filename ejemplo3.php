<?php

$valor=rand(1,1200);
echo "El valor sorteado es : " . $valor;

if ($valor<=9) {
    echo "</br>El valor sorteado es de un DIGITO";
}

else {
    if ($valor<=99) {
        echo "</br>El valor sorteado es de dos DIGITO";
    } 
    else {
        if ($valor<=999) {
            echo "</br>El valor sorteado es de tres DIGITO";
    
        }
      else {
        echo "</br>El valor sorteado es erroneo";
      }

    }
}


?>