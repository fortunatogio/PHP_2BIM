<?php

require_once 'Telefone.php';

class Fixo extends Telefone {

    private $custoPorMinuto;

    public function __construct($ddd, $numero, $custoPorMinuto) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function getCustoPorMinuto() {
        return $this->custoPorMinuto;
    }

    public function setCustoPorMinuto($custoPorMinuto) {
        $this->custoPorMinuto = $custoPorMinuto;
    }

    public function calculaCusto($tempo) {
        return $tempo * $this->custoPorMinuto;
    }
}