<?php
include_once("../controller/autoload.php");

function preencherCidade(){
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
}



preencherCidade();