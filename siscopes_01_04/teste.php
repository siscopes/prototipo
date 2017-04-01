<?php

$var1 = $_POST['teste2'];
$var1 = strtolower($var1); //texto todo em minusculo

echo "Valor concatenado" . $var1;
$var2 = strip_tags($var1);
$array = (explode(" ",$var2));

echo "Valor divido em strings";
echo $array[0];
echo $array[1];

$strcon = mysqli_connect('localhost','root','','teste2') or die('Erro ao conectar ao banco de dados');
$sql = "INSERT INTO teste2 (login, senha)
VALUES ('$array[0]', '$array[1]')";
mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!";

?>