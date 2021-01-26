<!DOCTYPE html>
<html>
    <head>

        <title>Tolkien</title>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/biblioteca/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/biblioteca/assets/css/bootstrap.min.css.map">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "icon" href = "/biblioteca/assets/img/logocolor.png"> 
        
        
        <script src="/biblioteca/assets/Chart.min.js"></script>
        <script src="/biblioteca/assets/js/jquery.min.js"></script>

        <script src="/biblioteca/assets/js/popper.min.js"></script>
        <script src="/biblioteca/assets/js/bootstrap.min.js"></script>
        <script src="/biblioteca/assets/js/icones.js"></script>
        <script src='/biblioteca/assets/js/funcoes.js'></script>
        
    </head>

    <body>

        <div id="container">

            <div>
                <nav id="barra" class="navbar navbar-expand-lg navbar-dark" style="background-color: #006266">
                    <span class="navbar-brand">Biblioteca Tolkien</span>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">


                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="socio" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='fa fa-user'></i>
                                    Perfil
                                </a>

                                <div class="dropdown-menu" aria-labelledby="perfil">
                                    <a class="dropdown-item" href="../socio/meus_dados.php">Dados de perfil</a>
                                    <a class="dropdown-item" href="../socio/meus_dependentes.php">Meus dependentes</a>
                                    <a class="dropdown-item" href="../socio/minhas_mensalidades.php">Minhas mensalidades</a>
                                    <!--    <a class="dropdown-item" href="cadastro_adm.php">Cadastrar sócios</a> -->
                                    <!--    <a class="dropdown-item" href="cadastro_adm.php">Cadastrar dependentes</a> -->

                                </div>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="adms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class= 'fa fa-users'></i>
                                    Socios
                                </a>

                                <div class="dropdown-menu" aria-labelledby="Socios">
                                    <a class="dropdown-item" href="../socio/lista_socios_view.php">Visualizar sócios</a>
                                    <a class="dropdown-item" href="cliente/cadastro_socio.php">Cadastrar sócio</a>
                                    <!-- <a class="dropdown-item" href="busca_socio_alteracao_view.php">Alterar sócio</a> -->
                                    <!-- <a class="dropdown-item" href="busca_socio_remocao_view.php">Remover sócio</a> -->

                                </div>

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="adms" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class= 'fa fa-users'></i>
                                    Dependentes
                                </a>

                                <div class="dropdown-menu" aria-labelledby="Socios">
                                    <a class="dropdown-item" href="../socio/socio_lista_dependentes.php">Visualizar dependentes</a>
                                    <a class="dropdown-item" href="../dependente/cadastro_dependente_view.php">Cadastrar dependente </a>
                                    <a class="dropdown-item" href="#">Alterar dependente</a>
                                    <a class="dropdown-item" href="#">Remover dependente</a>

                                </div>

                            </li>


                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" id="calendario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-calendar"></i>
                                    Eventos
                                </a>

                                 <div class="dropdown-menu" aria-labelledby="caledario"> 
                                     <a class="dropdown-item" href="../evento/cadastro_evento.php">Agendar eventos</a> 
                                     <a class="dropdown-item" href="#">Eventos pendentes</a> 
                                     <a class="dropdown-item" href="#">Eventos passados</a> 
                                 </div> 

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="#" id="mensalidades" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-money-check-alt"></i>
                                    Mensalidades
                                </a>

                                 <div class="dropdown-menu" aria-labelledby="paciente"> 
                                    <a class="dropdown-item" href="consulta_view.php">Verificar Consultas</a> 
                                    <a class="dropdown-item" href="agendamento_view.php">Agendar consulta</a> 

                                 </div> 

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="../socio/estatistica_socio.php" id="estatisticas" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-chart-pie"></i>
                                    Estatísticas
                                </a>

                                <!--    <div class="dropdown-menu" aria-labelledby="paciente"> -->
                                <!--        <a class="dropdown-item" href="consulta_view.php">Verificar Consultas</a> -->
                                <!--        <a class="dropdown-item" href="agendamento_view.php">Agendar consulta</a> -->

                                <!--   </div> -->

                            </li>

                            <li class="nav-item dropdown">

                                <a class="nav-link" href="#" id="notificacoes" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-bell"></i>
                                    Notificações
                                </a>

                                <!-- <div class="dropdown-menu" aria-labelledby="paciente"> -->
                                <!--     <a class="dropdown-item" href="consulta_view.php">Verificar Consultas</a> -->
                                <!--    <a class="dropdown-item" href="agendamento_view.php">Agendar consulta</a> -->

                                <!-- </div> -->

                            </li>

                            <li class="nav-item ">

                                <a class="nav-link" href="../../controller/logout.php" id="paciente" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class=" 	fas fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>