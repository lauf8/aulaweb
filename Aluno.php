<?php
    class Aluno {
    public $nome; 
    public $endereco;
    public $idade;
    public $telefone;
    public $cpf;
    
    // Métodos Get
    function getNome() {
        return $this->nome;
    }
    function getEndereco() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getCpf() {
        return $this->cpf;
    }
    // métodos Set
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    function setIdade($idade) {
        $this->idade = $idade;
    }
    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

}
    


?>

