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
        <?php include 'app/views/templates/navbar.php' ?>
        
        <div class="container">
            <div class="row mt-5" id="row">
                <div class="col pr-0">
                    <div class="border-right">
                        <h3 class="text-center">Quero me Cadastrar!</h3>
                        <form action="" method="post">

                        </form>
                    </div>
                </div>
                <div class="col pl-0">
                    <div class="border-left">
                        <h3 class="text-center">Já sou Cadastrado!</h3>
                        <form action="" method="post">

                        </form>
                    </div>
                </div>
            </div>            
        </div>

        <?php include 'app/views/templates/footer.php'?>

        <!--JS files-->
        <script src="public/js/popper.js"></script>
        <script src="public/js/bootstrap.js"></script>
        <script src="public/js/writer.js"></script>
        <script src="public/js/valida-cadastro.js"></script>

    </body>
</html>