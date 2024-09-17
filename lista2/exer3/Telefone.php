<?php

abstract class Telefone {

    protected $ddd;
    protected $numero;

    public function __construct($ddd, $numero) {
        $this->ddd = $ddd;
        $this->numero = $numero;
    }

    public function getDDD() {
        return $this->ddd;
    }

    public function setDDD($ddd) {
        $this->ddd = $ddd;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    abstract public function calculaCusto($tempo);
}