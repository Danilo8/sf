<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar Restaurante</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="http://localhost/sf/public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://localhost/sf/public/css/navbar-style.css">
        <link rel="stylesheet" href="http://localhost/sf/public/css/footer-style.css">
        <link rel="stylesheet" href="http://localhost/sf/public/css/restaurante-cadastro-style.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Mask JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
        <script src="http://localhost/sf/public/js/mask.js"></script>
    </head>
    <style>
        .container-fluid{background:url('http://localhost/sf/public/img/bg/bg-cadastro.jpg')no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        <?php include 'app/views/templates/navbar.php'?>

        <div style="" class="container-fluid pt-4">
            <h1 class="text-center pt-5 text-white">
                Faça parte do Search Food e
                <p>aumente <span id="writer"></span></p>
            </h1>
        </div>

        <div id="container" class="container mb-4">
            <div class="card mx-5">
                <div class="card-body">
                    <form id="form-cadastro" action="http://localhost/sf/app/Controllers/RestaurantController.php" method="post">
                        <h3 class="text-center mb-3">Complete todas as etapas</h3>
                        <div class="mx-5 px-5">                            
                            <div class="steps">                            
                                <ul class="steps-container">
                                    <li id="step1" style="width:33%;" class="activated">
                                        <div class="step">
                                            <div class="step-image"><span></span></div>
                                            <div class="step-current">Etapa 1</div>
                                            <div class="step-description">Proprietário</div>
                                        </div>
                                    </li>
                                    <li id="step2" style="width:33%;" class="">
                                        <div class="step">
                                            <div class="step-image"><span></span></div>
                                            <div class="step-current">Etapa 2</div>
                                            <div class="step-description">Restaurante</div>
                                        </div>
                                    </li>
                                    <li id="step3" style="width:33%;" class="">
                                        <div class="step">
                                            <div class="step-image"><span></span></div>
                                            <div class="step-current">Etapa 3</div>
                                            <div class="step-description">Dados de Acesso</div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="step-bar" style="width: 33%;border-radius: 20px"></div>
                            </div>
                        </div>
                        <div style="display: block" id="owner">
                            <h3 class="text-center mt-5 mb-5">Dados do Proprietário</h3>
                            <div class="form-group">
                                <label for="owner_name">Nome</label>
                                <input type="text" name="owner_name" id="owner_name" class="form-control" placeholder="Nome do Proprietário">
                                <small class="text-danger" style="float: right" id="error_owner_name"></small>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF do Proprietário">
                                <small class="text-danger" style="float: right" id="error_cpf"></small>
                            </div>
                            <div class="form-group">
                                <label for="owner_email">Email</label>
                                <input type="email" name="owner_email" id="owner_email" class="form-control" placeholder="Email do Proprietário">
                                <small class="text-danger" style="float: right" id="error_owner_email"></small>
                            </div>
                            <div class="form-group">
                                <label for="owner_phone">Telefone</label>
                                <input type="text" name="owner_phone" id="owner_phone" class="form-control" placeholder="Telefone do Proprietário">
                                <small class="text-danger" style="float: right" id="error_owner_phone"></small>
                            </div>
                            <div class="form-group text-right mt-5">
                                <button id="btn1" type="button" class="btn btn-lg btn-danger disabled">Continuar</button>
                            </div>
                        </div>
                        <div style="display: none" id="restaurant">
                            <h3 class="text-center mt-5 mb-5">Dados do Restaurante</h3>
                            <div class="form-group">
                                <label for="restaurant_name">Nome</label>
                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="Nome do Restaurante">
                                <small class="text-danger" style="float: right" id="error_restaurant_name"></small>
                            </div>
                            <div class="form-group row mt-4">
                                <div class="col">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ do Restaurante">
                                    <small class="text-danger" style="float: right" id="error_cnpj"></small>
                                </div>
                                <div class="col">
                                    <label for="restaurant_phone">Telefone</label>
                                    <input type="text" name="restaurant_phone" id="restaurant_phone" class="form-control" placeholder="Telefone do Restaurante">
                                    <small class="text-danger" style="float: right" id="error_restaurant_phone"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="address">Endereço</label>
                                    <input type="text" name="address" id="address" class="form-control" placeholder="Endereço do Restaurante">
                                    <small class="text-danger" style="float: right" id="error_address"></small>
                                </div>
                                <div class="col-3">
                                    <label for="neighborhood">Bairro</label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control" placeholder="Bairro">
                                    <small class="text-danger" style="float: right" id="error_neighborhood"></small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-3">
                                    <label for="state">Estado</label>
                                    <select name="state" id="state" class="form-control">

                                    </select>
                                    <small class="text-danger" style="float: right" id="error_state"></small>
                                </div>
                                <div class="col">
                                    <label for="city">Cidade</label>
                                    <select name="city" id="city" class="form-control">

                                    </select>
                                    <small class="text-danger" style="float: right" id="error_city"></small>
                                </div>
                                <div class="col-4">
                                    <label for="cep">CEP</label>
                                    <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP">
                                    <small class="text-danger" style="float: right" id="error_cep"></small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Tipo de Cozinha</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Tipo de Cozinha</option>
                                </select>
                            </div>
                            <div class="form-group text-right">
                                <button id="vtr1" type="button" class="btn btn-lg btn-secondary">Voltar</button>
                                <button id="btn2"  type="button" class="btn btn-lg btn-danger disabled">Continuar</button>
                            </div>
                        </div>
                        <div style="display: none" id="acesso">
                            <h3 class="text-center mt-5 mb-5">Dados de Acesso</h3>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <small class="text-danger" style="float: right" id="error_email"></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                                <small class="text-danger" style="float: right" id="error_password"></small>
                            </div>
                            <div class="form-group mb-5">
                                <label for="password_confirm">Confirme a Senha</label>
                                <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirme a Senha">
                                <small class="text-danger" style="float: right" id="error_password_confirm"></small>
                            </div>
                            <input type="hidden" name="action" value="cadastrar">
                            <div class="form-group text-right">
                                <button id="vtr2" type="button" class="btn btn-lg btn-secondary">Voltar</button>
                                <button id="btn3" type="button" class="btn btn-lg btn-danger disabled">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include 'app/views/templates/footer.php'?>

        <!--JS files-->
        <script src="http://localhost/sf/public/js/popper.js"></script>
        <script src="http://localhost/sf/public/js/bootstrap.js"></script>
        <script src="http://localhost/sf/public/js/writer.js"></script>
        <script src="http://localhost/sf/public/js/valida-cadastro.js"></script>
        <script type="text/javascript">$(document).ready(function(){$.getJSON("http://localhost/sf/public/js/estados_cidades.json",function(o){var t='<option value="">Estado</option>';$.each(o,function(o,n){t+='<option value="'+n.sigla+'">'+n.sigla+"</option>"}),$("#state").html(t),$("#state").change(function(){var t="",n="";$("#state option:selected").each(function(){n+=$(this).text()}),$.each(o,function(o,a){a.sigla==n&&$.each(a.cidades,function(o,n){t+='<option value="'+n+'">'+n+"</option>"})}),$("#city").html(t)}).change()})});</script>
    </body>
</html>