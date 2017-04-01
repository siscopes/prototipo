 
<html>
  <head>

 <?php
 $var1 = $_POST['teste2'];
$var1 = strtolower($var1); //texto todo em minusculo
//$entrar = $_POST['entrar'];


date_default_timezone_set('America/Sao_Paulo');
$data = date('d-m-Y');
$hora = date('H:i');

$var2 = strip_tags($var1);
$array = (explode(" ",$var2));

echo $array[0],"<br>" ;
echo $data," - ";
echo $hora;


$strcon = mysqli_connect('localhost','root','','teste2') or die('Erro ao conectar ao banco de dados');
$sql = "SELECT * FROM login WHERE login = '$array[0]' AND senha = '$array[1]'"; 
$banco = mysqli_query($strcon,$sql) or die("Erro ao tentar encontrar registro");
$checar = mysqli_num_rows($banco);
           
         if ($checar > 0){
            echo "<br>BOA TARDE, SEU PONTO FOI BATIDO";
		        $sql2= "INSERT INTO ponto (data, hora, login) VALUES ('$data', '$hora', '$array[0]')";
            $banco2 = mysqli_query($strcon,$sql2) or die("Erro ao tentar cadastrar registro");
		   
           header("refresh: 5;index.html");
      die();
        }else{
           echo"login ou senha errados";
           header("refresh: 5;index.html");
        }
		mysqli_close($strcon);

//<div align="center" style="font-family: tahoma; font-size: 16px;">Você será redirecionado em: <br><div style="font-family: tahoma; font-size: 56px;" id="timers">10</div>

?>
  </body>
</html>