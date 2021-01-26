<?php

include_once("../controller/autoload.php");

class Funcionario{
    
    private $id;
    private $nome;
    private $telefone;
    private $logradouro;
    private $bairroId;
    private $numero;
    private $data_nascimento;
    private $usuarioId;
    private $estadoId;
    private $cidadeId;
    
    
    function __construct($id, $nome, $telefone, $logradouro, $bairro, $numero, $data_nascimento, $usuarioId, $estadoId, $cidadeId) {
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
        $this->numero = $numero;
        $this->data_nascimento = $data_nascimento;
        $this->usuarioId = $usuarioId;
        $this->estadoId = $estadoId;
        $this->cidadeId = $cidadeId;
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

    function getBairroId() {
        return $this->bairroId;
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

    function setBairroId($bairro) {
        $this->bairroId = $bairro;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }
    
    function getUsuarioId() {
        return $this->usuarioId;
    }

    function getEstadoId() {
        return $this->estadoId;
    }

    function getCidadeId() {
        return $this->cidadeId;
    }

    function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    function setEstadoId($estadoId) {
        $this->estadoId = $estadoId;
    }

    function setCidadeId($cidadeId) {
        $this->cidadeId = $cidadeId;
    }

    function inserir (){
        
        $conexao = new Conexao();
        $sql = "INSERT INTO funcionario (nome, telefone, data_nascimento, usuario_id, estado_id, cidade_id, bairro_id, logradouro,numero)
            VALUES (?,?,?,?,?,?,?,?)";
        $stm = $conexao->prepare($sql);
        $bind = array($this->nome, $this->telefone, $this->data_nascimento,
            $this->usuarioId, $this->estadoId, $this->cidadeId, $this->bairroId,
            $this->logradouro, $this->numero);
        try{
            $resultado = $stm->execute($bind);
        } catch (Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
        
        
        
        
        
    }

}