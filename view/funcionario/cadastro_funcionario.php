<?php
session_start();
include("../barra_navegacao.php");
/*
include('../../controller/autoload.php');


$conexao = new Conexao();


if (isset($_SESSION["cadastro-erro-dados"]) && $_SESSION["cadastro-erro-dados"]) {
    echo '<div class="alert alert-danger" style="text-aligh: center; width: 90%; margin-top: 10px;">';
    echo '<strong>Erro ao realizar cadastro</strong>';
    echo '</div>';
    unset($_SESSION["cadastro-erro-dados"]);
}


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
        <div id = "resposta_cadastro"></div>
        <form id = "formulario" method="post" >
        <div style="margin-top: 40px; margin-bottom: 40px; width: 90%; padding: 30px;" class="container border border-success rounded" >
            <h3 style="margin: 10px auto 40px auto; color: green; text-align: center">Cadastro de Funcionário</h3>
            
                <div id = "separador">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_adm">Nome </label>
                                <input type="text" class="form-control" name="nome_adm" id="nome_adm" minlength="20" maxlength = "100" placeholder="Nome Completo" req>
                            </div>
                        </div>

                        <div class="col-sm">

                            <div class="form-group">
                                <label for="email_adm">Email </label>
                                <input type="email" class="form-control" id="email_adm"  name="email_adm" maxlength = "100"  placeholder="Email" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cpf_adm">CPF </label>
                                <input type="text" class="form-control" name="cpf_adm" id="cpf_adm"  placeholder="CPF" minlength="11" maxlength = "14" req>
                            </div>

                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_usuario">Nome de Usuário </label>
                                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" minlength="7" maxlength = "7"  placeholder="Nome de Usuário" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="senha_adm">Senha </label>
                                <input type="text" class="form-control" id="senha_adm" name="senha_adm" minlength= "8" maxlength = "16" placeholder="Senha" req>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="estado_adm">Estado </label>
                                <select class="form-control form-control-sm" id="estado" name="estado_adm">
                                    <option value="1">Acre</option>
                                    <option value="2">Alagoas</option>
                                    <option value="3">Amapá</option>
                                    <option value="4">Amazonas</option>
                                    <option value="5">Bahia</option>
                                    <option value="6">Ceará</option>
                                    <option value="7">Distrito Federal</option>
                                    <option value="8">Espírito Santo</option>
                                    <option value="9">Goiás</option>
                                    <option value="10">Maranhão</option>
                                    <option value="11">Mato Grosso</option>
                                    <option value="12">Mato Grosso do Sul</option>
                                    <option value="13">Minas Gerais</option>
                                    <option value="14">Pará</option>
                                    <option value="15">Paraíba</option>
                                    <option value="16">Paraná</option>
                                    <option value="17">Pernambuco</option>
                                    <option value="18" selected="">Piauí</option>
                                    <option value="19">Rio de Janeiro</option>
                                    <option value="20">Rio Grande do Norte</option>
                                    <option value="21">Rio Grande do Sul</option>
                                    <option value="22">Rondônia</option>
                                    <option value="23">Roraima</option>
                                    <option value="24">Santa Catarina</option>
                                    <option value="25">São Paulo</option>
                                    <option value="26">Sergipe</option>
                                    <option value="27">Tocantins</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cidade_adm">Cidade </label>
                                <input type = "text" class="form-control" id="cidade_adm" name="cidade_adm" maxlength = "100" placeholder="Cidade" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="telefone">Telefone </label>
                                <input type="text" class="form-control" name="telefone" id="telefone" minlength="20" maxlength = "100" placeholder="Telefone" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="logradouro_adm">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro_adm" name="logradouro_adm" maxlength = "100" placeholder="Logradouro" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="numero_adm">Número </label>
                                <input type = "text" class="form-control" id="numero_adm" name="numero_adm" maxlength = "100" placeholder="Numero" req>
                            </div>
                        </div>


                        <div class="col-sm">

                            <div class="form-group">
                                <label for="bairro_adm" >Bairro </label>
                                <input type = "text" class="form-control" id="bairro_adm" name="bairro_adm" maxlength = "100" placeholder="Bairro" req>
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
                                <label for="nivel_acesso">Tipo de Usuário </label>
                                <select class="form-control form-control-sm" name="nivel_acesso">
                                    <option value="1" selected="">Padrão</option>
                                    <option value="2">Administrador menor</option>
                                    <option value="3">Administrador maior</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    </div>


        </div>
        <div class="row">

            <div class="col-sm"><input  type = "hidden" value="gravarFuncionario"  name="acao" ></div>

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

        $("#formulario").submit(function(e) {
            e.preventDefault();
        });

        $("#formulario").on('submit', (function(){
            $.ajax({
                url:'../../controller/FuncionarioController.php',
                type : 'POST',
                dataType : 'html',
                data : {acao : "gravar", formulario : $("#formulario").serializeArray()},

                beforeSend : function(){
                },

                success : function(resultado_cadastro){
                    //console.log(resultado_cadastro);
                    //window.location = "#resposta_cadastro";
                    var a = 6;
                    b = a;
                    resultado_cadastro;
                    //document.getElementById("resposta_cadastro").innerHTML = resultado_cadastro;
                },

                error : function(erro){
                    console.log(erro);
                }
            });
        }));

    </script>

    </body>
</html>

