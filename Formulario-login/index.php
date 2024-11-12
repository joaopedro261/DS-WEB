<?php
// Credenciais definidas para teste
$usuarioCorreto = "admin";
$senhaCorreta = "12345";

// Obtendo valores do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verificando as credenciais
if ($username === $usuarioCorreto && $password === $senhaCorreta) {
    // Redireciona para a página aprovado.php
    header("Location: aprovado.php");
    exit();
} else {
    // Redireciona para a página nao_aprovado.php
    header("Location: nao_aprovado.php");
    exit();
}
?>