<?php
#Arquivo para validar conexão com o banco de dados, sendo necessário abrir o arquivo no browser e alterar os parâmetros abaixo
$dbname = 'control';
$dbuser = 'root';
$dbpass = 'Findes@2022';
$dbhost = '127.0.0.1';

$link = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Não foi possível conectar no servidor '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");

$test_query = "SHOW TABLES FROM $dbname";
$result = mysqli_query($link, $test_query);

$tblCnt = 0;
while($tbl = mysqli_fetch_array($result)) {
  $tblCnt++;
  #echo $tbl[0]."<br />\n";
}

if (!$tblCnt) {
  echo "Não existe tabela no banco $dbname <br />\n";
} else {
  echo "<center>Conexão realizado com Sucesso!! <BR> Existem $tblCnt tabelas no banco de dados $dbname <br /></center>\n";
} 
?>