<?php

include_once("../controller/autoload.php");

class Funcionario{
    
    private $id;
    private $nome;
    private $telefone;
    private $logradouro;
    private $bairro;
    private $numero;
    private $data_nascimento;
    private $usuarioId;
    private $estadoId;
    private $cidadeId;
    private $cpf;
    private $email;
    private $nome_usuario;
    private $senha;
    private $conexao;
    
    function __construct($id, $nome, $telefone, $logradouro, $bairro, $numero, $data_nascimento, $usuarioId, $estadoId, $cidadeId, $cpf, $email, $nome_usuario, $senha) {
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
        $this->cpf = $cpf;
        $this->email = $email;
        $this->nome_usuario = $nome_usuario;
        $this->senha = $senha;
        $this->conexao = new Conexao();
    }

    
//    function __construct($id, $nome, $telefone, $logradouro, $bairro, $numero, $data_nascimento, $usuarioId, $estadoId, $cidadeId) {
//        $this->id = $id;
//        $this->nome = $nome;
//        $this->telefone = $telefone;
//        $this->logradouro = $logradouro;
//        $this->bairro = $bairro;
//        $this->numero = $numero;
//        $this->data_nascimento = $data_nascimento;
//        $this->usuarioId = $usuarioId;
//        $this->estadoId = $estadoId;
//        $this->cidadeId = $cidadeId;
//    }
//    function __construct($parametros){
//        $this->id = $parametros['id'];
//        $this->nome = $parametros['nome'];
//        $this->telefone = $parametros['telefone'];
//        $this->logradouro = $parametros['logradouro'];
//        $this->bairro = $parametros['bairro'];
//        $this->numero = $parametros['numero'];
//        $this->data_nascimento = $parametros['data_nascimento'];
//        $this->usuarioId = $parametros['tipo_usuario'];
//        $this->estadoId = $parametros['estado'];
//        $this->cidadeId = $parametros['cidade'];
//        $this->cpf = $parametros['cpf'];
//        $this->email = $parametros['email'];
//        $this->nome_usuario = $parametros['nome_usuario'];
//        $this->senha = $parametros['senha'];
//        
//        $this->conexao = new Conexao();
//    }
    

    
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
        $sql = "INSERT INTO funcionario (
            nome,
            telefone,
            data_nascimento, 
            usuario_id,
            estado_id,
            cidade_id,
            bairro,
            logradouro,
            numero,
            cpf,
            nome_usuario,
            senha,
            email)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->conexao->prepare($sql);
        $bind = array(
            $this->nome,
            $this->telefone,
            $this->data_nascimento,
            $this->usuarioId,
            $this->estadoId,
            $this->cidadeId,
            $this->bairro,
            $this->logradouro,
            $this->numero,
            $this->cpf,
            $this->nome_usuario,
            $this->senha,
            $this->email);
        try{
            $resultado = $stm->execute($bind);
            if ($resultado){
                return true;
            }else{
                return false;
            }
        } catch (Exception $e){
            echo 'Exceção capturada: ', $e->getMessage(), "\n";
        }
    }

}