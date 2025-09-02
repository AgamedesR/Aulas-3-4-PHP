<?php

$peso1 = $_GET ['peso1'];
$nota1 = $_GET ['nota1'];
$peso2 = $_GET ['peso2'];
$nota2 = $_GET ['nota2'];


function calcular_media($p1, $p2, $n1, $n2) {
    $media = ($p1 * $n1 + $p2 * $n2) / ($p1 + $p2);
    return $media;
}

echo calcular_media($peso1, $peso2, $nota1, $nota2);


function calcular_media_ponderada($p1, $p2, $n1, $n2) {
    $media_ponderada = ($p1 * $n1 + $p2 * $n2) / ($p1 + $p2);
    return $media_ponderada;
}

echo calcular_media_ponderada($peso1, $peso2, $nota1, $nota2);


function calcular_media_aritmetica($n1, $n2) {
    $media_aritmetica = ($n1 + $n2) / 2;
    return $media_aritmetica;
}

echo calcular_media_aritmetica($nota1, $nota2);