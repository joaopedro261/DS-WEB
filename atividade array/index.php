<?php

    include_once('arrays.php')

$produto = [
    "nome" => "Teclado",
    "preco" => 120.50,
    "estoque" => 15
];

// Exibindo as informações do produto
foreach ($produto as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}
?>
