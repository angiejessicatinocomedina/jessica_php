<?php
$dado1=rand(1,6);
$dado2=rand(1,6);

print "<p>\n";
print "<img src=\"img/$dado1.svg\" width= \"140\">\n";
print "<img src=\"img/$dado2.svg\">\n";

print "<p>\n";
//juego del cubilete con dos dados 
if ($dado1==$dado2) {
   echo "¡ganastes, sacastes dos dados iguales ";
} else {
    echo "¡perdistes, sacastes dos dados distintos";
}



?>