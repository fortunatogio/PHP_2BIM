<?php

require_once 'Ponto.php';

$ponto1 = new Ponto(2, 3);
$ponto2 = new Ponto(7, 1);

echo "Ponto 1: " . $ponto1->toString() . "<br>";
echo "Ponto 2: " . $ponto2->toString() . "<br>";

$ponto1->setX(5);
$ponto1->setY(7);
echo "Ponto 1 após definir nova posição: " . $ponto1->toString() . "<br>";

$ponto1->deslocar(2, -3);
echo "Ponto 1 após deslocamento: " . $ponto1->toString() . "<br>";

echo "Distância entre ponto1 e ponto2: " . $ponto1->distanciaPontoQualquer($ponto2) . "<br>";
echo "Distância entre ponto1 e coordenadas (0, 0): " . $ponto1->distanciaCoordenadas(0, 0) . "<br>";
echo "Distância entre (3, 4) e (7, 1): " . Ponto::distanciaDoisPontos(3, 4, 7, 1) . "<br>";
echo "Total de pontos criados: " . Ponto::getContador() . "<br>";