<?php

$var1 = $_POST['teste2'];
$var1 = strtolower($var1); //texto todo em minusculo

echo "Valor concatenado" . $var1;
$array = (explode("*",$var1));

echo "Valor divido em strings";
echo $array[0]." e ";
echo $array[1];

?>