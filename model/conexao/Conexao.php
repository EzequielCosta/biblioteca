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