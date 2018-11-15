<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Entrar ou Cadastrar</title>

        <!--Fonts-->
<link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="public/css/navbar-style.css">
        <link rel="stylesheet" href="public/css/footer-style.css">
        <link rel="stylesheet" href="public/css/entrar-style.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php include 'app/Views/templates/navbar.php' ?>
        
        <div class="container">
            <div class="row my-5" id="row">
                <div class="col pr-0 border-right">
                    <h3 class="text-center">Quero me Cadastrar!</h3>
                    <form action="" method="post" class="px-5">
                        <div class="form-group mt-5">                            
                            <button style="background-color: #3b5998;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                <i style="font-size: 25px" class="fa fa-facebook"></i>
                                Cadastrar com Facebook
                            </button>
                            <button style="background-color: #dd4b39;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                <i style="font-size: 25px" class="fa fa-google-plus"></i>
                                Cadastrar com Google
                            </button>
                            <button type="button" class="btn btn-block btn-lg btn-info text-truncate" data-toggle="collapse" data-target="#form-cadastro-email" aria-expanded="false" aria-controls="form-cadastro-email">
                                <i style="font-size: 25px" class="fa fa-envelope"></i>
                                Cadastrar com Email
                            </button>
                        </div>
                        <div class="collapse multi-collapse" id="form-cadastro-email">
                            <div class="form-group mt-4">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
                                <small style="float: right" class="text-danger" id="error_name"></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                <small style="float: right" class="text-danger" id="error_email"></small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefone:</label>
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone">
                                <small style="float: right" class="text-danger" id="error_phone"></small>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                                <small style="float: right" class="text-danger" id="error_password"></small>
                            </div>
                            <div class="form-group">
                                <label for="password_confirm">Confirme sua Senha:</label>
                                <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirme sua Senha">
                                <small style="float: right" class="text-danger" id="error_password_confirm"></small>
                            </div>
                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox" class="custom-control-input" id="check">
                                <label class="custom-control-label" for="check">
                                    Li e aceito os termos de uso e as políticas de privacidade.
                                </label>
                            </div>
                            <div class="form-group mt-5">
                                <button type="button" class="btn btn-block btn-lg btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col pl-0 border-left">
                    <h3 class="text-center">Já sou Cadastrado!</h3>                   
                    <form action="" method="post" class="px-5">
                         <div class="form-group mt-5">                            
                            <button style="background-color: #3b5998;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                <i style="font-size: 25px" class="fa fa-facebook"></i>
                                Entrar com Facebook
                            </button>
                            <button style="background-color: #dd4b39;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                <i style="font-size: 25px" class="fa fa-google-plus"></i>
                                Entrar com Google
                            </button>
                        </div>
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Digite seu Email">
                        </div>
                        <div class="form-group">
                            <label for="">Senha:</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Digite sua Senha">
                        </div>
                        <div class="form-group mt-4">                            
                            <button type="button" class="btn btn-block btn-lg btn-primary">Entrar</button>
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
            <div id="tab" class="mb-5 mt-4">
                <div class="container mb-5 card px-0">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item" style="width: 100%">
                            <a class="nav-link active px-0" id="cadastrar-tab" data-toggle="tab" href="#cadastrar" role="tab" aria-controls="cadastrar" aria-selected="true" style="color: black">
                                Quero me Cadastrar!
                            </a>
                        </li>
                        <li class="nav-item" style="width: 100%">
                            <a class="nav-link px-0" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false" style="color: black">
                                Já sou Cadastrado!
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content px-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="cadastrar" role="tabpanel" aria-labelledby="cadastrar-tab">
                            <form action="" method="post">
                                <div class="form-group mt-5">                            
                                    <button style="background-color: #3b5998;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                        <i style="font-size: 25px" class="fa fa-facebook"></i>
                                        Cadastrar com Facebook
                                    </button>
                                    <button style="background-color: #dd4b39;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                        <i style="font-size: 25px" class="fa fa-google-plus"></i>
                                        Cadastrar com Google
                                    </button>
                                    <button type="button" class="btn btn-block btn-lg btn-info text-truncate" data-toggle="collapse" data-target="#form-cadastro-email2" aria-expanded="false" aria-controls="form-cadastro-email2">
                                        <i style="font-size: 25px" class="fa fa-envelope"></i>
                                        Cadastrar com Email
                                    </button>
                                </div>
                                <div class="collapse multi-collapse" id="form-cadastro-email2">
                                    <div class="form-group mt-4">
                                        <label for="name">Nome:</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Telefone:</label>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Telefone">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Senha:</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirm">Confirme sua Senha:</label>
                                        <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirme sua Senha">
                                    </div>
                                    <div class="custom-control custom-checkbox mt-4">
                                        <input type="checkbox" class="custom-control-input" id="check">
                                        <label class="custom-control-label" for="check">
                                            Li e aceito os termos de uso e as políticas de privacidade.
                                        </label>
                                    </div>
                                    <div class="form-group mt-5">
                                        <button type="button" class="btn btn-block btn-lg btn-primary">Cadastrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <form action="" method="post">
                                <div class="form-group mt-5">                            
                                    <button style="background-color: #3b5998;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                        <i style="font-size: 25px" class="fa fa-facebook"></i>
                                        Entrar com Facebook
                                    </button>
                                    <button style="background-color: #dd4b39;color: #fff" type="button" class="btn btn-block btn-lg text-truncate">
                                        <i style="font-size: 25px" class="fa fa-google-plus"></i>
                                        Entrar com Google
                                    </button>
                                </div>
                                <div class="form-group">
                                    <label for="">Email:</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Digite seu Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Senha:</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Digite sua Senha">
                                </div>
                                <div class="form-group mt-4">                            
                                    <button type="button" class="btn btn-block btn-lg btn-primary">Entrar</button>
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
            </div>          
        </div>

        <?php include 'app/Views/templates/footer.php'?>

        <!--JS files-->
        <script src="public/js/popper.js"></script>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/valida-user-cadastro.js"></script>
    </body>
</html>