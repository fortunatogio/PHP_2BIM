<?php

require_once 'Funcionario.php';
require_once 'Servente.php';
require_once 'Motorista.php';
require_once 'MestreDeObras.php';

$funcionario = new Funcionario(1, "Igor", 2500.00);
echo $funcionario;

$servente = new Servente(2, "Hugo", 2000.00);
echo $servente;

$motorista = new Motorista(3, "Rafael", 3000.00, "123456");
echo $motorista;

$mestreDeObras = new MestreDeObras(4, "Danilo", 3500.00, 25);
echo $mestreDeObras;