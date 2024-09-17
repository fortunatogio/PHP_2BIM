<?php

require_once 'Fixo.php';
require_once 'PrePago.php';
require_once 'PosPago.php';

$telefoneFixo = new Fixo('18', '1234-5678', 0.50);
echo "Custo da ligação fixa: R$" . $telefoneFixo->calculaCusto(10) . "<br>";

$telefonePrePago = new PrePago('18', '111111222', 0.30, 'Operadora X');
echo "Custo da ligação pré-paga: R$" . $telefonePrePago->calculaCusto(10) . "<br>";

$telefonePosPago = new PosPago('18', '222222111', 0.30, 'Operadora Y');
echo "Custo da ligação pós-paga: R$" . $telefonePosPago->calculaCusto(10) . "<br>";