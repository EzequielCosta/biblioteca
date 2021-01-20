<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src = "../assets/js/funcoes_cpf.js"></script>
        <script src = "../assets/js/funcoes_rg.js"></script>
        <script src = "../assets/js/funcoes_telefone.js"></script>

        <head>

        <title>CLIENTE</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.map">
        
        
        <script src="bootstrap/Chart.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>

        <script src="bootstrap/js/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/icones.js"></script>
        <script src='bootstrap/js/funcoes.js'></script>
    </head>


    </head>


    <body>

        <div style="margin-top: 40px; margin-bottom: 40px; width: 90%; padding: 30px;" class="container border border-success rounded" >
            <h3 style="margin: 10px auto 40px auto; color: green; text-align: center">Cadastro de Cliente</h3>
            <form id = "formulario" enctype="multipart/form-data" action="../../controller/SocioController.php?<?php echo 'acao='.'insert'?>" method="POST" autocomplete="off" class="needs-validation" novalidate>
                <div id = "separador">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_adm">Nome: </label>
                                <input type="text" class="form-control" name="nome_adm" id="nome_adm" minlength="20" maxlength = "100" placeholder="Nome Completo" required>
                            </div>
                        </div>

                        <div class="col-sm">

                            <div class="form-group">
                                <label for="email_adm">Email: </label>
                                <input type="email" class="form-control" id="email_adm" minlength="20" name="email_adm" maxlength = "100"  placeholder="Email" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cpf_adm">CPF: </label>
                                <input type="text" class="form-control" name="cpf_adm" id="cpf_adm" onkeydown="javascript: fMasc(this, mCPF);"  placeholder="CPF" minlength="11" maxlength = "14" required>
                            </div>

                        </div>


                        <div class="col-sm">
                            <div class="form-group">
                                <label for="senha_adm">Senha: </label>
                                <input type="text" class="form-control" id="senha_adm" name="senha_adm" minlength= "8" maxlength = "16" placeholder="Senha" required>
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-sm">
                            <div class="form-group">
                                <label for="estado_adm">Estado: </label>
                                <select class="form-control form-control-sm" id="estado" name="estado_adm">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI" selected="">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cidade_adm">Cidade: </label>
                                <input type = "text" class="form-control" id="cidade_adm" name="cidade_adm" maxlength = "100" placeholder="Cidade" required>
                            </div>
                        </div>

                        <div class="col-sm">

                            <div class="form-group">
                                <label for="bairro_adm" >Bairro: </label>
                                <input type = "text" class="form-control" id="bairro_adm" name="bairro_adm" maxlength = "100" placeholder="Bairro" required>
                            </div>

                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="numero_adm">Número: </label>
                                <input type = "text" class="form-control" id="numero_adm" name="numero_adm" maxlength = "100" placeholder="Numero" required>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="logradouro_adm">Logradouro: </label>
                                <input type="text" class="form-control" id="logradouro_adm" name="logradouro_adm" maxlength = "100" placeholder="Logradouro" required>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="data_nascimento">Data de Nascimento: </label>
                                <input type="date" class="form-control"  name="data_nascimento" requrired = "">
                            </div>
                        </div>

                    </div>


                    <div class="row"  style="margin-top: 0px; height: 20px;">
                        <div class="col-sm-3" >

                            <div class="form-group">
                                <label for="telefone" class="chato"  >Telefone(s): <i id="add-telefone" style="font-size:15px; color:green;" class="fa">&#xf067;</i> </label>
                            </div>

                        </div>

                        <div class="col-sm-3">
                            <div class="form-group"></div>
                        </div>


                    </div>

                    <div class="row" id="telefone" style="margin-top: 0px;">

                        <div class="col-sm-3">

                            <div class="form-group">
                                <label for="telefone" >&emsp;</label>
                                <input type = "text" class="form-control" id ="teste"  name="telefone[]" maxlength = "20" placeholder="Telefone">
                            </div>

                        </div>

                        <div class="col-sm-3">

                            <div class="form-group">
                                <label for="telefone" >&emsp;</label>
                                <input type = "text" class="form-control"  name="telefone[]" maxlength = "10" placeholder="Telefone">
                            </div>

                        </div>

                       
                    </div>

                </div>
                <div class="row">

                    <div class="col-sm"></div>

                    <div style="text-align: center; margin-top: 5%;" class="col-sm">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>

                    <div class="col-sm"></div>
                </div>
        </div>

    </div>

</form>

<script>
    // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
//    (function () {
//        'use strict';
//        window.addEventListener('load', function () {
//            // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
//            var forms = document.getElementsByClassName('needs-validation');
//            // Faz um loop neles e evita o envio
//            var validation = Array.prototype.filter.call(forms, function (form) {
//                form.addEventListener('submit', function (event) {
//                    if (form.checkValidity() === false) {
//                        event.preventDefault();
//                        event.stopPropagation();
//                    }
//                    form.classList.add('was-validated');
//                }, false);
//            });
//        }, false);
//    })();

    // Adiciona uma linha de campos de telefone à tela
    $("#add-telefone").click(function () {
        var $clone = $('#telefone').clone();

        $("#separador").append($clone);
        //$("#add-telefone").remove();

    }
    );

    if (window.File && window.FileReader && window.FileList && window.Blob) {
        document.getElementById('files').addEventListener('change', handleFileSelect, false);
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }

    // Check for the File API support.
    if (window.File && window.FileReader && window.FileList && window.Blob) {
        document.getElementById('foto_perfil').addEventListener('change', handleFileSelect, false);
    } else {
        alert('The File APIs are not fully supported in this browser.');
    }

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


</script>

</div>


</body>
</html>

