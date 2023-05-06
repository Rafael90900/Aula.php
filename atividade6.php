<?php 
$valor = 10000;
$idade = $valor/365;
echo number_format($idade) . "<br>";
if ($idade>=18){
    echo "Maior de idade" ;
}else{
    echo "Menor de idade" ;
}

?>