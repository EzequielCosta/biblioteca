<?php

class Conexao extends PDO {

    private $tipo;
    private $host;
    private $database;
    private $user;
    private $pass;

    function __construct() {
        try{
            $this->tipo = 'pgsql';
            $this->host = 'localhost';
            $this->database = "biblioteca";
            $this->user = 'postgres';
            $this->pass = 'postgres';
            $dns = $this->tipo.':dbname='.$this->database.";host=".$this->host;
            parent::__construct($dns, $this->user, $this->pass, null);
        }

        catch(Exception $e){
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
    }   

}

$sql = "INSERT INTO FUNCIONARIO
(nome, telefone, data_nascimento, usuario_id, estado_id, cidade_id, bairro_id, logradouro, numero, cpf, nome_usuario, senha, email)     
VALUES (
    'Ezequiel',
    '11111',
    '2001-09-25',
    '1',
    '3',
    '4',
    '1100015001',
    'Rua',
    '776',
    '11111111111',
    'nome_usu',
    '1234',
    'zezquiel@gmail.com'
    )";

$conexao =  new Conexao();
$conexao->exec($sql);