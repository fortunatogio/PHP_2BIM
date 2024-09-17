<?php

class Ponto {

    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++;
    }

    public function getX() {
        return $this->x;
    }

    public function setX($x) {
        $this->x = $x;
    }

    public function getY() {
        return $this->y;
    }

    public function setY($y) {
        $this->y = $y;
    }

    public function deslocar($dx, $dy) {
        $this->x += $dx;
        $this->y += $dy;
    }

    public function toString() {
        return "(" . $this->x . ", " . $this->y . ")";
    }

    public static function getContador() {
        return self::$contador;
    }

    public function distanciaPontoQualquer(Ponto $outroPonto) {
        return sqrt(pow($outroPonto->getX() - $this->x, 2) + pow($outroPonto->getY() - $this->y, 2));
    }

    public function distanciaCoordenadas($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    public static function distanciaDoisPontos($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}