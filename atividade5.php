<?php 
$valor = 1200;
$juros = $valor * 0.12;
$total = $valor + $juros;
$parcelas = $total/12;
echo $total ."<br>";
echo $parcelas;

?>