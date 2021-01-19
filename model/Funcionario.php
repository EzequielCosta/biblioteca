<?php
    
class Funcionario{
    
    private $id;
    private $nome;
    private $telefone;
    private $logradouro;
    private $bairro;
    private $numero;
    private $data_nascimento;
    
    function __construct($id, $nome, $telefone, $logradouro, $bairro, $numero, $data_nascimento) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->data_nascimento = $data_nascimento;
    }
    
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getLogradouro() {
        return $this->logradouro;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getNumero() {
        return $this->numero;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }


}