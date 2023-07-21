<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            color: #333333;
        }
css
Copy code
    form {
        margin: 20px;
        max-width: 400px;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="text"] {
        width: 98%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus {
        border-color: #0000ff;
        outline: none;
    }

    input[type="submit"] {
        background-color: #0000ff;
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .button-container {
        margin: 20px;
        text-align: center;
    }

    .button {
        display: inline-block;
        background-color: #0000ff;
        color: #ffffff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }
    input[type="date"] {
        width: 98%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    input[type="date"]:focus {
        border-color: #0000ff;
        outline: none;
    }

    .button:hover {
        background-color: #333333;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
</style>
</head>
<body>
    <form method="GET" action="crudaluno.php">
        <label for="nome">Nome aluno</label>
        <input type="text" id="nome" name="nome">

    <label for="idade">Idade</label>
    <input type="text" id="idade" name="idade">

    <label for="turma">Estatus</label>
    <input type="text" id="estatus" name="estatus">

    <label for="endereco">Endereço</label>
    <input type="text" id="endereco" name="endereco">

    <label for="datanascimento">Data de nascimento</label>
    <input type="date" id="datanascimento" name="datanascimento">

    <input type="submit" name="cadastrar" value="Cadastrar">
</form>

<div class="button-container">
    <a href="../index.php" class="button">Voltar</a>
</div>
</body>
</html>