<?php

require_once 'Funcionario.php';

class Servente extends Funcionario {
    
    private $adicionalInsalubridade = 0.05;

    public function getSalarioBase() {
        return parent::getSalarioBase() * (1 + $this->adicionalInsalubridade);
    }
}
?>