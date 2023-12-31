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
        width: 100%;
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
</style>
</head>
<body>
<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('../conexao.php');



##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET["datanascimento"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];
        $cpf = $_GET["cpf"];

        ##codigo SQL
        $sql = "INSERT INTO professor(nome,idade,datanascimento,endereco,estatus,cpf) 
                VALUES('$nome','$idade','$datanascimento',' $endereco','$estatus','$cpf')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
                echo " <strong>OK!</strong> o professor
                $nome foi Incluido com sucesso!!!"; 
                echo " <button class='button'><a href='../index.php'>voltar</a></button>";
            }
        }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $id = $_POST["id"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];
    $cpf = $_POST["cpf"];
   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus, cpf= :cpf WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento', $datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_BOOL);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->execute();
 


    if($stmt->execute())
        {
            echo " <strong>OK!</strong> o professor
             $nome foi Alterado com sucesso!!!"; 

            echo " <button class='button'><a href='listaprof.php'>voltar</a></button>";
        }

}        
?>


<?php
if (isset($_GET['excluir'])) {
    $id = $_GET['id'];
    
   
    if (isset($_GET['confirmar']) && $_GET['confirmar'] === 'sim') {
        
        $sql = "DELETE FROM `professor` WHERE id={$id}";
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        $stmt = $conexao->prepare($sql);
        $stmt->execute();

      
        echo "<strong>OK!</strong> O professor $id foi excluído!!!"; 
        echo "<button class='button'><a href='listaprof.php'>Voltar</a></button>";
    } else {
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmar Exclusão</title>
    

</head>
<body>
    <h2>Confirmar Exclusão</h2>
    <p>Tem certeza que deseja excluir o professor?</p>

    
    <button class='button'><a href="crudprof.php?excluir=1&id=<?php echo $id ?>&confirmar=sim">Sim</a></button>
    <button class='button'><a href="listaprof.php">Não</a></button>
</body>
</html>
<?php
    }
}
?> 
</body>

