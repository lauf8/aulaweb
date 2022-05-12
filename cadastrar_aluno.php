<?php

include_once'./banco.php';
include_once './Aluno.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);//filtra os dados

    $query_aluno = "insert INTO aluno (nome,endereco,idade,telefone,cpf) VALUES ('".$dados['nome']."',
    '".$dados['endereco']."', '".$dados['idade']."', '".$dados['telefone']."','".$dados['cpf']."')";//insere os dados na tabela aluno
    $cadastro_aluno = $conn->prepare($query_aluno);//prepara a query para ser executada no banco
    $cadastro_aluno->execute();//executa a linha no banco


?>