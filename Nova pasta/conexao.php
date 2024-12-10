<?php
$nomeServidor   = "localhost";
$nomeBancoDados = "cadastro";
$nome	= "root";
$senha		= "usbw";


// Criando a conexão

$conexao = mysqli_connect($nomeServidor, $nome, $senha, $nomeBancoDados);


// Checando a conexão

if (!$conexao) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
echo "Conectado com Sucesso !";
mysqli_close($conexao);


?>