<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="post"> 
        <label for="Aluno">Aluno:</label><br>
        <input type="text" name="aluno" id="aluno" required="required" autofocus><br>

        <label for="n° da chamada">N° da chamada:</label><br>
        <input type="number" name="n° da chamada" id="n° da chamada" required="required"><br>
        
        <label for="RM">RM:</label><br>
        <input type="text" name="rm" id="rm" required="required"><br>

        <label for="Patrimônio Máquina">Patrimônio Máquina:</label><br>
        <input type="number" name="Patrimônio Máquina" id="Patrimônio Máquina" required="required"><br>

        <label for="n° da maquina">N° da maquina:</label><br>
        <input type="number" name="n° da maquina" id="n° da maquina" required="required"><br>

        <label for="St(Service tag)">St(Service tag):</label><br>
        <input type="number" name="St(Service tag)" id="St(Service tag)" required="required"><br>

        <input type = "file"><br><br>
        
        <button type="submit" name="cadastrar">Cadastrar</button>
        <button type="reset">Limpar</button><br><br>
    </form>
</body>
</html>