<?php
// juego: el dado con mayor cantidad 
/* Dos jugadores, cada jugador tiene dos dados 
al lanzar los dados , uno de ellos tiene que ganar y el otro perder . 
por la sumatoriA de los dos dados y cuando salen el mismo numero de dado 
se m,encionara que vuelvan a tirar el dADO */

// JUGADOR N°1
$dado1A=rand(1,6);
$dado2A=rand(1,6);

// JUGADOR N°2
$dado1B=rand(1,6);
$dado2B=rand(1,6);


print "<p>\n";
print "<img src=\"img/$dado1A.svg\" width= \"140\">\n";
print "<img src=\"img/$dado2A.svg\" width= \"140\">\n";
print "<img src=\"img/$dado1B.svg\" width= \"140\">\n";
print "<img src=\"img/$dado2B.svg\" width= \"140\">\n";
// print "<img src=\"img/$dado2.svg\">\n";

print "<p>\n";

if ($dado1A + $dado2A> $dado1B+ $dado2B) {
   echo "El jugador numero N°1 gano ==> " . $dado1A+$dado2A;
} else {
    if ($dado1A + $dado2A< $dado1B+ $dado2B) {
        echo "El jugador numero N°2 gano ==> " . $dado1B+$dado2B;
    } else {
        if ($dado1A + $dado2A == $dado1B+ $dado2B) {
            echo "El jugador N°1 y jugador N°2 estan empates ";
            echo "</br>";
            echo "</br>";
            echo " Que vuelvan a tirar el dado  ";  
        }
        
    }
}



?>