<?php
##salvar como CrudAlunos.php
##arquivo que implementa a tabela e seus atributos, acessa os metodos get e set
require_once 'DB.php';    //inclui arquivo DB

 abstract class CrudProfessor extends DB {   //faz herança do arquivo DB
    
    protected $tabela;
    public $nome;
    public $endereco;
    public $idade;
    public $matricula;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    
    
    
}
