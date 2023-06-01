<?php

$nombreper=$_POST ['nombre'];
$apellidoper=$_POST ['apellido'];
$edadper=$_POST ['edad'];
$generoper=$_POST ['genero'];
$correoper=$_POST ['correo'];
$contraper=$_POST ['contraseña'];
$celularper=$_POST ['Ndecel'];
$fechanacimientoper=$_POST ['nacimiento'];

echo "El nombre del usuario es ==> " .  $nombreper;
echo "<br>";
echo "<br>";
echo "El apellido del usuario es ==> " .  $apellidoper;
echo "<br>";
echo "<br>";
echo "La edad del usuario es ==>  " .  $edadper;
echo "<br>";
echo "<br>";
echo "Su genero del usuario es ==>  " .  $generoper;
echo "<br>";
echo "<br>";
echo "El correo electronico del usuario es ==>  " .  $correoper;
echo "<br>";
echo "<br>";
echo "La contraseña del usuario es  ==>  " .  $contraper;
echo "<br>";
echo "<br>";
echo "El numero de celular del usuario es  ==>  " .  $celularper;
echo "<br>";
echo "<br>";
echo "La fecha de nacimiento del usuario ==>  " .  $fechanacimientoper;
echo "<br>";

?>