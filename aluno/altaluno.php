<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
        width: 99%;
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

    .button:hover {
        background-color: #333333;
    }

    a {
        text-decoration: none;
        color: inherit;
    }
    input[type="number"] {
        width: 98%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        transition: border-color 0.3s ease;
    }

    input[type="number"]:focus {
        border-color: #0000ff;
        outline: none;
    }
    </style>
<body>

<?php
    require_once('../conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $datanascimento = $array_retorno['datanascimento'];
   $estatus = $array_retorno['estatus'];
   $endereco = $array_retorno['endereco'];
   


?>

<form method="POST" action="crudaluno.php">
    <label for="nome">Nome do aluno</label>
    <input type="text" name="nome" required id="nome" value="<?php echo $nome ?>" >

    <label for="idade">Idade</label>                                       
    <input type="number" name="idade" id="idade" min="18" max="100" required value="<?php echo $idade ?>" >
    <input type="hidden" name="id" value="<?php echo $id ?>" >

    <label for="datanascimento">Data de nascimento</label>     
    <input type="text" name="datanascimento" id="datanascimento" required value="<?php echo $datanascimento ?>" >

    <label>Aluno está aprovado</label>
    <label for="radiov">Verdadeiro</label>
    <input type="radio" id="radiov" required name="estatus" value="AP" <?php echo ($estatus === 'AP') ? 'checked' : '' ?>>
        
    <label for="radioF">Falso</label>
    <input type="radio" id="radioF" required name="estatus" value="RP" <?php echo ($estatus === 'RP') ? 'checked' : '' ?>>

    <label for="endereco">Endereço</label>                          
    <input type="text" name="endereco" id="endereco" required value="<?php echo $endereco ?>" >

    <input type="submit" name="update" value="Alterar">
</form>
</body>
</html>