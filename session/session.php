<?php

session_start();

$_SESSION['nome'] = 'João';
$_SESSION['idade'] = '16';
$_SESSION['altura'] = '1,70';
$_SESSION['email'] = 'Joao@joao.com';

echo 'Variavel criada com sucesso!';
?>