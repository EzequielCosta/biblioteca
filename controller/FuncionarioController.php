<?php

include_once("../controller/autoload.php");

class FuncionarioController{
    
    function realizarAcao($acao) {
        if ($acao === "gravar") {
            $this->inserirFuncionario();
        }
        if($acao === "atualizar"){
            $this->atualizarEvento();
        }

        if($acao === "deletar"){
            $this->deletarEvento();
        }

        if($acao === "requisitar"){
            $this->requisitarEvento();
        }

    }
    public function inserirFuncionario(){
        $formulario = $_POST['formulario'];
        $funcionario = new Funcionario(null,
                $formulario['nome'], 
                $formulario['telefone'],
                $formulario['logradouro'],
                $formulario['bairro'], 
                $formulario['numero'], 
                $formulario['data_nascimento'],
                $formulario['usuario'],
                $formulario['estado'],
                $formulario['cidade']);
        
        $funcionario->inserir();
        echo "alert('aooaoa');";
        
        
    }
    
}

if (isset($_POST["acao"])){
 
    $acao =  filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
    $funcionarioController = new FuncionarioController();
    $funcionarioController->realizarAcao($acao);
}