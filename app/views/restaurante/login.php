<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acessar Painel</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="http://<?=URL?>/public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://<?=URL?>/public/css/navbar-style.css">
        <link rel="stylesheet" href="http://<?=URL?>/public/css/restaurante-login-style.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!--cdn Sweet Alert 2-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    </head>
    <style>
        body{background:url('http://<?=URL?>/public/img/bg/bg-login.jpg')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        <?php include 'app/Views/templates/navbar.php' ?>
        
        <div id="right" class="col-4 p-0">
            <div class="card bg-light">
                <div class="card-body">
                    <h3 class="text-center pt-4">
                        Acessar Painel
                    </h3>
                    <div class="text-center mt-4">
                        <a href="cadastro">Cadastrar meu Restaurante</a>
                    </div>
                    <form id="form-login" class="mx-4" action="http://<?=URL?>/app/Controllers/RegisterController.php" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            <small class="text-danger" style="float: right" id="error_email"></small>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                            <small class="text-danger" style="float: right" id="error_password"></small>
                        </div>
                        <input type="hidden" name="action" value="logar">
                        <div class="form-group">
                            <button id="btn-login" class="btn btn-lg btn-primary btn-block" type="button">
                                Entrar
                            </button>
                        </div>
                        <div class="form-group text-center">
                            <a class="text-danger" href="#">
                                <i class="fa fa-lock"></i>
                                Recuperar Senha
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="http://<?=URL?>/public/js/popper.js"></script>
        <script src="http://<?=URL?>/public/js/bootstrap.js"></script>
        <script src="http://<?=URL?>/public/js/valida-login.js"></script>

        <?php if (isset($route->Link)) { ?>
            <?php $msg = $route->Link; ?>
            <?php if ($msg == "email-ou-senha-invalidos") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'error',
                        showConfirmButton: false,
                        title: 'Email ou Senha Inválidos!',
                        timer: 8000,
                    })
                </script>
            <?php } else if ($msg == "usuario-nao-autenticado") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'error',
                        showConfirmButton: false,
                        title: 'Usuário não Autenticado!',
                        timer: 8000,
                    })
                </script>
            <?php } ?>
        <?php } ?>
    </body>
</html>