
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>

<h2>Calculadora </h2>
<form method="get" action="">
    <label for="valor1">Digite um número:</label>
    <input type="number" name="valor1" id="valor1" max="9999" required><br><br>

    <label for="valor2">Digite outro número:</label>
    <input type="number" name="valor2" id="valor2" max="9999" required><br><br>

    <label for="operacao">Operação:</label>
    <select name="operacao" id="operacao" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>

    <button type="submit" name="calcular">Calcular</button>
    <button type="reset">Limpar</button>
</form>

<?php

function somar($n1, $n2) {
    return $n1 + $n2;
}

function subtrair($n1, $n2) {
    return $n1 - $n2;
}


function multiplicar($n1, $n2) {
    return $n1 * $n2;
}

function dividir($n1, $n2) {
    if ($n2 != 0) {
        return $n1 / $n2;
    } else {
        return "Erro: Divisão por zero";
    }
}

function calcular($n1, $n2, $operacao) {
    switch ($operacao) {
        case '+':
            return somar($n1, $n2);
        case '-':
            return subtrair($n1, $n2);
        case '*':
            return multiplicar($n1, $n2);
        case '/':
            return dividir($n1, $n2);
        default:
            return "Operação inválida";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['calcular'])) {
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $operacao = $_GET['operacao'];
    $resultado = calcular($valor1, $valor2, $operacao);

    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>
