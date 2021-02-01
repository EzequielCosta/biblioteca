<?php
session_start();
include("../barra_navegacao.php");
include_once('../../controller/autoload.php');


if (isset($_SESSION["critica"])) {
    $echo = "<script>alert('" . $_SESSION['critica'] . "')</script>";
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
        <form id = "formulario" action="pesquisar_funcionario.php" method="post" >
            <div style="margin-top: 40px; margin-bottom: 40px; width: 90%; padding: 30px;" class="container border border-success rounded" >
                <h3 style="margin: 10px auto 40px auto; color: green; text-align: center">Pesquisar Funcionário</h3>

                <div id = "separador">


                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome">Nome </label>
                                <input type="text" class="form-control" name="nome" id="nome" maxlength = "100" placeholder="Nome Completo" req>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="cpf">CPF </label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" req>
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="form-group">
                                <label for="nome_usuario">Nome usuário </label>
                                <input type="text" class="form-control" name="nome_usuario" id="nome_usuario" placeholder="Nome Usuário" req>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div class="row">

                <div class="col-sm"><input  type = "hidden" value="gravar"  name="acao" ></div>

                <div style="text-align: center; margin-top: 2%;" class="col-sm">
                    <button type="submit" class="btn btn-success">Pesquisar</button>
                </div>

                <div class="col-sm"></div>
            </div>


            <?php
            if (isset($_POST['nome']) && isset($_POST['nome_usuario']) && isset($_POST['cpf'])) {

                $conexao = new Conexao();
                $cpf = empty($_POST['cpf']) ? "" : " cpf ilike '%{$_POST['cpf']}%' and ";
                $nome = empty($_POST['nome']) ? "" : " nome ilike '%{$_POST['nome']}%' and";
                $nome_usuario = empty($_POST['nome_usuario']) ? "" : " nome_usuario ilike '%{$_POST['nome_usuario']}%' and";
                $where = $cpf.$nome.$nome_usuario." 1=1";
                $sql = "select * from funcionario where $where";
                $stm = $conexao->prepare($sql);
                //$blind = array($nome, $nome_usuario, $cpf);
                $stm->execute();
                $resultado = $stm->fetchAll();
                
                $echo = '<table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">Nome Usuário</th>
                            
                          </tr>
                        </thead>
                        <tbody>';
                foreach ($resultado as $linha) {
                    //<td>'.$linha['nome'].'</td>
                    $echo .= "
                          <tr>
                            <th scope='row'>".$linha['id']."</th>
                            <th scope='row'>".$linha['cpf']."</th>
                            <td><a href ='editar_funcionario.php?id=".$linha['id']."'>".$linha['nome']."</a></td>
                            <td>".$linha['nome_usuario']."</td>
                          </tr>
                        ";
                }
                $echo .= '</tbody></table>';
                echo $echo;
            }
            ?>
        </form>

    </body>
</html>

