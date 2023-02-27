<?php

$dbhost = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'estoque';

$conexao = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);

//if($conexao->connect_errno)
//{
//   echo "Erro";
//}
//else
//{
//   echo "Conexaao foi de berço";
//}

$nome = $_POST['nome'];
$codigo = $_POST['codigo'];

$result = mysqli_query($conexao, "INSERT INTO estoquecont(nome, codigo) VALUES ('$nome','$codigo')");
?>