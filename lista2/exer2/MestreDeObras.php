<?php

require_once 'Servente.php';

class MestreDeObras extends Servente {
    
    private $numFuncionarios;

    public function __construct($codigo, $nome, $salarioBase, $numFuncionarios) {
        parent::__construct($codigo, $nome, $salarioBase);
        $this->numFuncionarios = $numFuncionarios;
    }

    public function getNumFuncionarios() {
        return $this->numFuncionarios;
    }

    public function setNumFuncionarios($numFuncionarios) {
        $this->numFuncionarios = $numFuncionarios;
    }

    public function getSalarioBase() {
        $adicional = 0.1 * floor($this->numFuncionarios / 10);
        return parent::getSalarioBase() * (1 + $adicional);
    }
}
?>