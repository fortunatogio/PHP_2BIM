<?php

require_once 'Telefone.php';

abstract class Celular extends Telefone {

    protected $custoPorMinutoBase;
    protected $nomeOperadora;

    public function __construct($ddd, $numero, $custoPorMinutoBase, $nomeOperadora) {
        parent::__construct($ddd, $numero);
        $this->custoPorMinutoBase = $custoPorMinutoBase;
        $this->nomeOperadora = $nomeOperadora;
    }

    public function getCustoPorMinutoBase() {
        return $this->custoPorMinutoBase;
    }

    public function setCustoPorMinutoBase($custoPorMinutoBase) {
        $this->custoPorMinutoBase = $custoPorMinutoBase;
    }

    public function getNomeOperadora() {
        return $this->nomeOperadora;
    }

    public function setNomeOperadora($nomeOperadora) {
        $this->nomeOperadora = $nomeOperadora;
    }
}