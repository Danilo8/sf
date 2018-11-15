<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administrador | Search Food</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="http://<?=URL?>/public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://<?=URL?>/public/css/navbar-style.css">
        <link rel="stylesheet" href="http://<?=URL?>/public/css/dashboard-template.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!--cdn Sweet Alert 2-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    </head>
    <body data-spy="scroll" data-target="#gerenciar">
        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            GERENCIAR
                        </div>
                        <div id="gerenciar" class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-truncate">
                                    <a href="#dados_restaurante">
                                        Dados do Restaurante
                                    </a>                                    
                                </li>
                                <li class="list-group-item text-truncate">
                                    <a href="#dados_proprietario">
                                        Dados do Proprietário
                                    </a>                                    
                                </li>
                                <li class="list-group-item text-truncate">
                                    <a href="#dados_acesso">
                                        Dados de Acesso
                                    </a>                                    
                                </li>
                                <li class="list-group-item text-truncate">
                                    <a href="#horario_funcionamento">
                                        Horário de Funcionamento
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="dados_restaurante" class="card mb-5">
                        <div class="card-header">
                            DADOS DO RESTAURANTE
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="profile_picture">Foto do Restaurante</label>
                                            <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="restaurant_name">Nome do Restaurante</label>
                                            <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="Nome do Restaurante">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label for="cnpj">CNPJ</label>
                                                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ do Restaurante">
                                            </div>
                                            <div class="col">
                                                <label for="restaurant_phone">Telefone do Restaurante</label>
                                                <input type="text" name="restaurant_phone" id="restaurant_phone" class="form-control" placeholder="Telefone do Restaurante">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label for="cnpj">Endereço</label>
                                                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="Endereço do Restaurante">
                                            </div>
                                            <div class="col-4">
                                                <label for="restaurant_phone">Bairro</label>
                                                <input type="text" name="restaurant_phone" id="restaurant_phone" class="form-control" placeholder="Bairro">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-3">
                                                <label for="state">Estado</label>
                                                <select name="state" id="state" class="form-control">
                                                    <option value="">Estado</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="city">Cidade</label>
                                                <select name="city" id="city" class="form-control">
                                                    <option value="">Cidade</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                                <label for="cep">CEP</label>
                                                <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right mt-4">                                    
                                    <button type="button" class="btn btn-lg btn-success">Salvar Alterações</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="dados_proprietário" class="card mb-5">
                        <div class="card-header">
                            DADOS DO PROPROETÁRIO
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-8 px-5">
                                        <div class="form-group">
                                            <label for="email">Nome do Proprietário</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Nome do Proprietário">
                                        </div>
                                        <div class="form-group">
                                            <label for="cpf">CPF</label>
                                            <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF do Proprietário">
                                        </div>
                                        <div class="form-group">
                                            <label for="owner_email">Email</label>
                                            <input type="email" name="owner_email" id="owner_email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="owner_phone">Telefone</label>
                                            <input type="owner_phone" name="owner_phone" id="owner_phone" class="form-control" placeholder="Telefone">
                                        </div>
                                        <div class="form-group mt-4">                                    
                                            <button type="button" class="btn btn-lg btn-success">Salvar Alterações</button>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card alert-info border-info"> 
                                            <div class="card-body text-center">
                                                <h4 class="card-title">
                                                    <i class="fa fa-info-circle"></i>
                                                </h4>
                                                <p class="card-text">
                                                    Os dados do Proprietário são apenas para contato.
                                                    Nenhuma das suas informações ficará visivel para os clientes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="dados_acesso" class="card mb-5">
                        <div class="card-header">
                            DADOS DE ACESSO
                        </div>
                        <div class="card-body">
                            <form action="" method="post" class="mx-5 px-5">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Senha</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="horario_funcionamento" class="card mb-5">
                        <div class="card-header">
                            HORÁRIO DE FUNCIONAMENTO
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--JS files-->
        <script src="http://localhost/sf/public/js/popper.js"></script>
        <script src="http://localhost/sf/public/js/bootstrap.js"></script>
        <script src="http://localhost/sf/public/js/valida-login.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                $('body').scrollspy({ target: '#gerenciar' })
            });
        </script>
    </body>
</html>