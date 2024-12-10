<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Lora:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #87CEEB; 
            color: #333;
            font-family: 'Poppins', sans-serif; 
            margin: 0;
            height: 100vh; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center; 
        }

        .clientes {
            background-color: #4169E1; 
            padding: 20px;
            border: 1px solid #ff99b3; 
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #1E90FF; 
            font-family: 'Lora', serif; 
        }

        input[type="text"],
        input[type="password"] {
            width: 280px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #0000FF; 
            border-radius: 5px;
            font-size: 14px;
            color: #B0C4DE; 
            font-family: 'Poppins', sans-serif; 
        }

        input[type="submit"] {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background-color: #ff66a3; /* Botão em rosa vibrante */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Poppins', sans-serif; /* Fonte para o botão */
        }

        input[type="submit"]:hover {
            background-color: #cc5280; /* Tom mais escuro para o hover */
        }

        h2 {
            color: #e60073; /* Título em rosa escuro vibrante */
            font-family: 'Lora', serif; /* Fonte mais sofisticada para título */
            font-weight: 600;
            font-size: 28px;
        }
    </style>
</head>

<body>
    <div class="clientes">
        <h2>Cadastro</h2>
        <form action="root.php" method="POST">
            <label for="nome-cliente">Nome:</label>
            <input type="text" id="nome-cliente" name="nome" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>