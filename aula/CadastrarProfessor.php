<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Professor.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <title>Cadastro de Professor</title>

</head>

<body>
   <?php    
      $professsor = new Professor;
      if(isset($_POST['cadastrar'])):
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $idade = $_POST['idade'];
            $matricula = $_POST['matricula'];


            $professsor->setNome($nome);
            $professsor->setEndereco($endereco);
            $professsor->setIdade($idade);
            $professsor->setMatricula($matricula);

            if($professsor->insert()){
                echo "professsor ". $nome. " inserido com sucesso";
            }
      endif;
    ?>

    <form method='post' action="">
        <label for='Nome'> Nome:</label>
            <input type="text" name="nome" required/>
        
        <label for='endereço'> Endereço: </label>    
            <input type="text" name="endereco" required/>
        
        <label for='endereço'> Idade </label>    
            <input type="text" name="idade" required/>

        <label for='endereço'> Matricula: </label>    
            <input type="text" name="matricula" required/>

            <input type="submit" name="cadastrar"/>
            
    </form>

</body>
</html>
