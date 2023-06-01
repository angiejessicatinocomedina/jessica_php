<?php
//JUEGO :el dado mas alto
// Dos jugadores,cada jugador tinene un solo dado
//  al lanzar el dado, uno de ellos tiene que ganar y el otro perder 
// y cuando sacan el mismo numero de dado 
// se mencionara que vuelvan a tirar el dado 
$dado1=rand(1,6);
$dado2=rand(1,6);

print "<p>\n";
print "<img src=\"img/$dado1.svg\" width= \"140\">\n";
print "<img src=\"img/$dado2.svg\">\n";

print "<p>\n";
//juego del cubilete con dos dados 
if ($dado1>$dado2) {
    echo "El jugador 1 gana";
} else {
    if ($dado1<$dado2) {
        echo "El jugador 2 gana";
    }
    if ($dado1==$dado2) {
        echo "Ambos jugadores empatan";
    } 
}




?>