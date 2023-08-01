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
   $sql = "SELECT * FROM professor where id= :id";
   
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
   $cpf = $array_retorno['cpf'];

   


?>

  <form method="POST" action="crudprof.php">
  <label for="">Nome do Professor</label>
        <input type="text" name="nome" id="" required value=<?php echo $nome?> >
  <label for="">Idade</label>                                       
        <input type="number" name="idade" id="" min="18" max="100"  required value=<?php echo $idade ?> >
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
  <label for="">Data de nascimento</label>     
        <input type="text" name="datanascimento" required id="" value=<?php echo $datanascimento?> >

        <label>Professor está ativo</label>
    <label for="radiov">Verdadeiro</label>
    <input type="radio" id="radiov" required name="estatus" value="ativo" <?php echo ($estatus === 'ativo') ? 'checked' : '' ?>>
        
    <label for="radioF">Falso</label>
    <input type="radio" id="radioF" required name="estatus" value="desativo" <?php echo ($estatus === 'desativo') ? 'checked' : '' ?>>

  <label for="">Endereço</label>                          
        <input type="text" name="endereco" id="" required value=<?php echo $endereco ?> >
  <label for="">CPF</label>                          
        <input type="text" name="cpf" id="" required value=<?php echo $cpf ?> >
        
        <input type="submit" name="update" value="Alterar">
  </form>
</body>
</html>