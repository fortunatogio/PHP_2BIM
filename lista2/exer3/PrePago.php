<?php

require_once 'Celular.php';

class PrePago extends Celular {

    public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora);
    }

    public function calculaCusto($tempo) {
        $custoFinal = $this->custoPorMinutoBase * 1.4;
        return $tempo * $custoFinal;
    }
}