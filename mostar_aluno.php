
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <img src="img/png escola.png" alt="">
        <h1>Todos os Alunos no sistema</h1>
    </div>
    <?php
       include_once'./banco.php';// conecta com o banco
       $query_mostrar_alunos = "select nome,endereco,idade,telefone,cpf from aluno";//linha que faz o select, mostrando os dados na tela
       $result_mostrar_alunos = $conn->prepare($query_mostrar_alunos);
       $result_mostrar_alunos-> execute();

       if (($result_mostrar_alunos) AND ($result_mostrar_alunos->rowCount() != 0)) {
            while ($row_aluno = $result_mostrar_alunos->fetch(PDO::FETCH_ASSOC)) {
                extract($row_aluno);
           ?>
           
           <table class = "tabela">
               <thead>
                   <tr>
                       <th>Nome</th>
                       <th>Endereço</th>
                       <th>Idade</th>
                       <th>Telefone</th>
                       <th>CPF</th>


                   </tr>
               </thead>
               <tbody>
                   <tr>
                        <td><?php echo $row_aluno['nome'];?></td>
                        <td><?php echo $row_aluno['endereco'];?></td>
                        <td><?php echo $row_aluno['idade'];?></td>
                        <td><?php echo $row_aluno['telefone'];?></td>
                        <td><?php echo $row_aluno['cpf'];?></td>
                        <div class = 'but'>
                        <a class="edi" href=http://localhost/editaraluno.php?id=$idaluno>Editar</a><br>
                        <a class = "exi" href=http://localhost/apagaraluno.php?id=$idaluno>Apagar</a><br>
                        </div>
                        
                        </tr>
               </tbody>
           </table>
           
           
           
           
           
           
           <?php
                    
                    echo "<hr>";                 
                        
    }
  }



   ?>


    <div class = 'mostrar'>
       
        
    </div>
</body>
</html>


<!-- <form action="edita.php" metdh="POST">
                            <input type="submit" name="" id="">
                        <input type="hidden" name="cpf"  value="<?php echo $row_aluno['cpf'];?>">
                        </form> -->
