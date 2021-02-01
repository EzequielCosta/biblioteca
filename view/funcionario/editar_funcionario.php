<?php
session_start();
include("../barra_navegacao.php");
include_once('../../controller/autoload.php');


if (isset($_SESSION["critica"])) {
    $echo = "<script>alert('".$_SESSION['critica']."')</script>";
    echo $echo;
    unset($_SESSION["critica"]);
}

$conexao = new Conexao();
$id = $_GET['id'];
//$cpf = $_POST['cpf'];
//$nome = $_POST['nome'];
//$nome_usuario = $_POST['nome_usuario'];
//$where = "";

//$sql = "select * from funcionario where (nome ilike = '$nome')or nome_usuario ilike = '$nome_usuario' or cpf ilike '$cpf'"; 
$sql = "select * from funcionario where id = ?"; 
$stm = $conexao->prepare($sql);
$blind = array($id);
$stm->execute($blind);
$resultado = $stm->fetch();
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
                                <input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome']?>" id="nome" maxlength = "100" placeholder="Nome Completo" req>
                            </div>
                        </div>

                        <div class="col-sm">

                            <div class="form-group">
                                <label for="email">Email </label>
                                <input type="email" class="form-control" id="email"  name="email" value="<?php echo $resultado['email']?>" maxlength = "100"  placeholder="Email" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cpf">CPF </label>
                                <input type="text" class="form-control" name="cpf" id="cpf" value="<?php echo $resultado['cpf']?>" placeholder="CPF"  maxlength = "14" req>
                            </div>

                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_usuario">Nome de Usuário </label>
                                <input type="text" class="form-control" id="nome_usuario" name="nome_usuario" value="<?php echo $resultado['nome_usuario']?>"  maxlength = "7"  placeholder="Nome de Usuário" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="senha">Senha </label>
                                <input type="text" class="form-control" id="senha" name="senha" minlength= "8" value="<?php echo $resultado['senha']?>" maxlength = "16" placeholder="Senha" req>
                            </div>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="estado">Estado </label>
                                <select class="form-control form-control-sm" id="estado" name="estado">
                                    
                                    <option value="1" <?php if ($resultado['estado_id'] == "1"){ echo 'selected=""';}?>>Acre</option>
                                    <option value="2" <?php if ($resultado['estado_id'] == "2"){ echo 'selected=""';}?>>Alagoas</option>
                                    <option value="3" <?php if ($resultado['estado_id'] == "3"){ echo 'selected=""';}?>>Amazonas</option>
                                    <option value="4" <?php if ($resultado['estado_id'] == "4"){ echo 'selected=""';}?>>Amapá</option>
                                    <option value="5" <?php if ($resultado['estado_id'] == "5"){ echo 'selected=""';}?>>Bahia</option>
                                    <option value="6" <?php if ($resultado['estado_id'] == "6"){ echo 'selected=""';}?>>Ceará</option>
                                    <option value="7" <?php if ($resultado['estado_id'] == "7"){ echo 'selected=""';}?>>Distrito Federal</option>
                                    <option value="8" <?php if ($resultado['estado_id'] == "8"){ echo 'selected=""';}?>>Espírito Santo</option>
                                    <option value="9" <?php if ($resultado['estado_id'] == "9"){ echo 'selected=""';}?>>Goiás</option>
                                    <option value="10" <?php if ($resultado['estado_id'] == "10"){ echo 'selected=""';}?>>Maranhão</option>
                                    <option value="11" <?php if ($resultado['estado_id'] == "11"){ echo 'selected=""';}?>>Minas Gerais</option>
                                    <option value="12" <?php if ($resultado['estado_id'] == "12"){ echo 'selected=""';}?>>Mato Grosso do Sul</option>
                                    <option value="13" <?php if ($resultado['estado_id'] == "13"){ echo 'selected=""';}?>>Mato Grosso</option>
                                    <option value="14" <?php if ($resultado['estado_id'] == "14"){ echo 'selected=""';}?>>Pará</option>
                                    <option value="15" <?php if ($resultado['estado_id'] == "15"){ echo 'selected=""';}?>>Paraíba</option>
                                    <option value="16" <?php if ($resultado['estado_id'] == "16"){ echo 'selected=""';}?>>Pernambuco</option>
                                    <option value="17" <?php if ($resultado['estado_id'] == "17"){ echo 'selected=""';}?>>Piauí</option>
                                    <option value="18" <?php if ($resultado['estado_id'] == "18"){ echo 'selected=""';}?>>Paraná</option>
                                    <option value="19" <?php if ($resultado['estado_id'] == "19"){ echo 'selected=""';}?>>Rio de Janeiro</option>
                                    <option value="20" <?php if ($resultado['estado_id'] == "20"){ echo 'selected=""';}?>>Rio Grande do Norte</option>
                                    <option value="21" <?php if ($resultado['estado_id'] == "21"){ echo 'selected=""';}?>>Rondônia</option>
                                    <option value="22" <?php if ($resultado['estado_id'] == "22"){ echo 'selected=""';}?>>Roraima</option>
                                    <option value="23" <?php if ($resultado['estado_id'] == "23"){ echo 'selected=""';}?>>Rio Grande do Sul</option>
                                    <option value="24" <?php if ($resultado['estado_id'] == "24"){ echo 'selected=""';}?>>Santa Catarina</option>
                                    <option value="25" <?php if ($resultado['estado_id'] == "25"){ echo 'selected=""';}?>>Sergipe</option>
                                    <option value="26" <?php if ($resultado['estado_id'] == "26"){ echo 'selected=""';}?>>São Paulo</option>
                                    <option value="27" <?php if ($resultado['estado_id'] == "27"){ echo 'selected=""';}?>>Tocantins</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cidade">Cidade </label>
<!--                                <input type = "text" class="form-control" id="cidade" name="cidade" maxlength = "100" placeholder="Cidade" req>-->
                                <?php
                                    $sql = "select nome from cidade where id = ?";
                                    $stm = $conexao->prepare($sql);
                                    $blind = array($resultado['cidade_id']);
                                    $stm->execute($blind);
                                    $resultadoCidade = $stm->fetch();        
                                    $echo = '
                                        <select class="form-control form-control-sm" id="cidade"  name="cidade">
                                        <option value="'.$resultado['cidade_id'].'">'.$resultadoCidade['nome'].'</option>
                                    </select>
                                        ';
                                    echo $echo;
                                ?>
<!--                                <select class="form-control form-control-sm" id="cidade"  name="cidade">
                                        <option value="0">Cidade</option>
                                </select>-->
                                
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="telefone">Telefone </label>
                                <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $resultado['telefone']?>"  maxlength = "100" placeholder="Telefone" req>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="logradouro">Logradouro</label>
                                <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $resultado['logradouro']?>" maxlength = "100" placeholder="Logradouro" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="numero">Número </label>
                                <input type = "text" class="form-control" id="numero" name="numero" value="<?php echo $resultado['numero']?>" maxlength = "100" placeholder="Numero" req>
                            </div>
                        </div>


                        <div class="col-sm">

                            <div class="form-group">
                                <label for="bairro" >Bairro </label>
                                <input type = "text" class="form-control" id="bairro" name="bairro" value="<?php echo $resultado['bairro']?>" maxlength = "100" placeholder="Bairro" req>
                            </div>

                        </div>



                    </div>

                    <div class="row">

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="data_nascimento">Data de Nascimento </label>
                                <input type="date" class="form-control"  value="<?php echo $resultado['data_nascimento']?>" name="data_nascimento" requrired = "">
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
            <div ><input  type = "hidden" name="id" value="<?php echo $resultado['id'] ?>"></div>
            <div class="col-sm"><input  type = "hidden" value="editar"  name="acao" ></div>

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

