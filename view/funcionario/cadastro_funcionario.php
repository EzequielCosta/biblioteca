<?php
session_start();
include("../barra_navegacao.php");
include_once('../../controller/autoload.php');


if (isset($_SESSION["critica"])) {
    $echo = "<script>alert('".$_SESSION['critica']."')</script>";
    echo $echo;
    unset($_SESSION["critica"]);
}
/*

if (isset($_SESSION["cadastro-erro-cpf"]) && $_SESSION["cadastro-erro-cpf"]) {
    echo '<div class="alert alert-danger" style="text-aligh: center; width: 90%; margin-top: 10px;">';
    echo '<strong>Esse CPF já está cadastrado no sistema</strong>';
    echo '</div>';
    unset($_SESSION["cadastro-erro-cpf"]);
}


if (isset($_SESSION["cadastro-sucesso"]) && $_SESSION["cadastro-sucesso"]) {
    echo '<div class="alert alert-success" role="alert" style="text-aligh: center; width: 90%;margin-top: 10px;">';
    echo '<strong>Cadastro realizado com sucesso!</strong>';
    echo '</div>';
    unset($_SESSION["cadastro-sucesso"]);
}
*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">


    </head>


    <body>
        <div id = "critica"></div>
        <form id = "formulario" action="../../controller/FuncionarioController.php" method="post" >
        <div style="margin-top: 40px; margin-bottom: 40px; width: 90%; padding: 30px;" class="container border border-success rounded" >
            <h3 style="margin: 10px auto 40px auto; color: green; text-align: center">Cadastro de Funcionário</h3>
            
                <div id = "separador">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome">Nome </label>
                                <input type="text" class="form-control" name="nome" id="nome" maxlength = "100" placeholder="Nome Completo" req>
                            </div>
                        </div>

                        <div class="col-sm">

                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email"  name="email" maxlength = "100"  placeholder="Email" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cpf">CPF </label>
                                <input type="text" class="form-control" name="cpf" id="cpf"  placeholder="CPF"  maxlength = "14" req>
                            </div>

                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_usuario">Nome de Usuário </label>
                                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario"  maxlength = "7"  placeholder="Nome de Usuário" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="senha">Senha </label>
                                <input type="text" class="form-control" id="senha" name="senha" minlength= "8" maxlength = "16" placeholder="Senha" req>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="estado">Estado </label>
                                <select class="form-control form-control-sm" id="estado" name="estado">
                                    <option value="1">Acre</option>
                                    <option value="2">Alagoas</option>
                                    <option value="3">Amazonas</option>
                                    <option value="4">Amapá</option>
                                    <option value="5">Bahia</option>
                                    <option value="6">Ceará</option>
                                    <option value="7">Distrito Federal</option>
                                    <option value="8">Espírito Santo</option>
                                    <option value="9">Goiás</option>
                                    <option value="10">Maranhão</option>
                                    <option value="11">Minas Gerais</option>
                                    <option value="12">Mato Grosso do Sul</option>
                                    <option value="13">Mato Grosso</option>
                                    <option value="14">Pará</option>
                                    <option value="15">Paraíba</option>
                                    <option value="16">Pernambuco</option>
                                    <option value="17" selected="">Piauí</option>
                                    <option value="18">Paraná</option>
                                    <option value="19">Rio de Janeiro</option>
                                    <option value="20">Rio Grande do Norte</option>
                                    <option value="21">Rondônia</option>
                                    <option value="22">Roraima</option>
                                    <option value="23">Rio Grande do Sul</option>
                                    <option value="24">Santa Catarina</option>
                                    <option value="25">Sergipe</option>
                                    <option value="26">São Paulo</option>
                                    <option value="27">Tocantins</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cidade">Cidade </label>
<!--                                <input type = "text" class="form-control" id="cidade" name="cidade" maxlength = "100" placeholder="Cidade" req>-->
                                <select class="form-control form-control-sm" id="cidade" name="cidade">
                                        <option value="0">Cidade</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="telefone">Telefone </label>
                                <input type="text" class="form-control" name="telefone" id="telefone"  maxlength = "100" placeholder="Telefone" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength = "100" placeholder="Logradouro" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="numero">Número </label>
                                <input type = "text" class="form-control" id="numero" name="numero" maxlength = "100" placeholder="Numero" req>
                            </div>
                        </div>


                        <div class="col-sm">

                            <div class="form-group">
                                <label for="bairro" >Bairro </label>
                                <input type = "text" class="form-control" id="bairro" name="bairro" maxlength = "100" placeholder="Bairro" req>
                            </div>

                        </div>



                    </div>

                    <div class="row">

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="data_nascimento">Data de Nascimento </label>
                                <input type="date" class="form-control"  name="data_nascimento" requrired = "">
                            </div>
                        </div>
                        
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="tipo_usuario">Tipo de Usuário </label>
                                <select class="form-control form-control-sm" name="tipo_usuario">
                                    <option value="1" selected="">Padrão</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Funcionário</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    </div>


        </div>
        <div class="row">

            <div class="col-sm"><input  type = "hidden" value="gravar"  name="acao" ></div>

            <div style="text-align: center; margin-top: 2%;" class="col-sm">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>

            <div class="col-sm"></div>
        </div>
        </form>


    <script>

        function handleFileSelect(evt) {
            var f = evt.target.files[0]; // FileList object
            var reader = new FileReader();
            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    var binaryData = e.target.result;
                    //Converting Binary Data to base 64
                    var base64String = window.btoa(binaryData);
                    //showing file converted to base64
                    document.getElementById('foto_perfil').value = base64String;
                    alert('File converted to base64 successfuly!\nCheck in Textarea');
                };
            })(f);
            // Read in the image file as a data URL.
            reader.readAsBinaryString(f);
        }

//        $("#formulario").submit(function(e) {
//            e.preventDefault();
//        });
//
//        $("#formulario").on('submit', (function(){
//            $.ajax({
//                url:'../../controller/FuncionarioController.php',
//                type : 'POST',
//                dataType : 'script',
//                data : {acao : "gravar", formulario : $("#formulario").serializeArray()},
//
//                beforeSend : function(){
//                },
//
//                success : function(resultado){
//                    //alert("FOI");
//                    resultado;
//                    a = 6;
//                },
//
//                error : function(erro){
//                    console.log(erro);
//                }
//            });
//        }));
//        
        $("#estado").on('focusout', (function(){
            $.ajax({
                url:'../../controller/preencherCidade.php',
                type : 'POST',
                dataType : 'json',
                data : {acao : "preencherCidade", estadoId : $("#estado").val()},

                beforeSend : function(){
                },

                success : function(result){
                    var cidade = $("#cidade");
                    var option = "";
                    for (i = 0; i < result.length; i++) {
                        option += "<option value='"+result[i]['id']+"'>"+result[i]['nome']+"</option>";
                    }
                    option = '<select class="form-control form-control-sm" id="cidade" name="cidade">' + option + '</select>';
                    cidade.html(option);
                },

                error : function(erro){
                    console.log("erro");
                    //console.log(erro);
                }
            });
        }));
        
        

    </script>

    </body>
</html>

