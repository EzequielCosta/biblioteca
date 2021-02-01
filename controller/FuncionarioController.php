<?php
session_start();
include_once("../controller/autoload.php");

class FuncionarioController{
    
    function realizarAcao($acao) {
        if ($acao === "gravar") {
            $this->inserirFuncionario();
        }
        if($acao === "editar"){
            $this->editarFuncionario();
        }

        if($acao === "deletar"){
            $this->deletarEvento();
        }

        if($acao === "preencherCidade"){
            $this->preencherCidade();
        }

    }
    public function inserirFuncionario(){
        //$formulario = $_POST['formulario'];
        //$parametros = array();
//        foreach ($formulario as $dado){
//            $parametros[$dado['name']] = $dado['value'];
//        }
        $funcionario = new Funcionario(null,
                filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS)
                );
        //$funcionario = new Funcionario($parametros);
        try{
            $resultado = $funcionario->inserir();
            
            if ($resultado){
                $_SESSION['critica'] = "Cadastrado com sucesso";
            }else{
                $_SESSION['critica'] = "Erro ao cadastrar";
            }
        } catch (Exception $e){
            $_SESSION['critica'] = $e->getMessage();
        }
        header('Location: ../view/funcionario/cadastro_funcionario.php');
        exit();
        
        
        
        
        
    }
    
    
    public function preencherCidade(){
        //$acao =  filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
        $bairro = filter_input(INPUT_POST, 'estadoId', FILTER_SANITIZE_SPECIAL_CHARS);
        $conexao =  new Conexao();
        $sql = "SELECT id, nome FROM CIDADE WHERE ESTADO_ID = ?";
        $blid = array($bairro);
        $stm = $conexao->prepare($sql);
        $stm->execute($blid);
        $resultado = $stm->fetchAll();
        $json = json_encode($resultado);
        echo $json;
        exit();
        
        
        
    }
    
    
    public function editarFuncionario(){
        //$formulario = $_POST['formulario'];
        //$parametros = array();
//        foreach ($formulario as $dado){
//            $parametros[$dado['name']] = $dado['value'];
//        }
        $funcionario = new Funcionario(filter_input(INPUT_POST, 'id'),
                filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS), 
                filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'nome_usuario', FILTER_SANITIZE_SPECIAL_CHARS),
                filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS)
                );
        //$funcionario = new Funcionario($parametros);
        try{
            $resultado = $funcionario->editar();
            
            if ($resultado){
                $_SESSION['critica'] = "Cadastrado com sucesso";
            }else{
                $_SESSION['critica'] = "Erro ao cadastrar";
            }
        } catch (Exception $e){
            $_SESSION['critica'] = $e->getMessage();
        }
        header('Location: ../view/funcionario/pesquisar_funcionario.php');
        exit();
        
        
        
        
        
    }
    
}

if (isset($_POST["acao"])){
 
    $acao =  filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_SPECIAL_CHARS);
    $funcionarioController = new FuncionarioController();
    $funcionarioController->realizarAcao($acao);
}