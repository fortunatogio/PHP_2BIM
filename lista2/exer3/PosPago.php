<?php

require_once 'Celular.php';

class PosPago extends Celular {

    public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoPorMinutoBase * 0.9;
        return $tempo * $custoFinal;
    }
}