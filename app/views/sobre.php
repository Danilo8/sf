<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sobre o Search Food</title>

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
        <link rel="stylesheet" href="public/css/sobre-style.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <style>
        .container-fluid{background:url('public/img/bg/bg-sobre.jpg')no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body>
        <?php include 'templates/navbar.php' ?>
        
        <div class="container-fluid"></div>
        <div class="container">
            <div class="card">
                <h2 class="text-center">
                    Sobre o Search Food
                </h2>
                <div class="card-body mt-5">
                    <p><b>Que somos?</b></p>
                    <p class="mb-4">
                    O Search Food é uma empresa de delivery de comida online que visa 
                    facilitar e agilizar o processo de pedir comida.
                    </p>
                    <p><b>O que buscamos?</b><i></i></p>
                    <p class="mb-4">
                    Conectar milhões de usuários a centenas de restaurantes 
                    com delivery de comida, facilitando e proporcionando uma 
                    nova experiencia na hora de vender ou pedir comida.
                    </p>
                    <p><b>O que nos motiva?</b></p>
                    <p class="mb-4">
                    Ser a empresa líder em delivery de comida online no Brasil.
                    </p>
                    <p><b>Como somos?</b></p>
                    <p class="mb-4">
                    
                    </p>
                </div>
            </div>
        </div>

        <?php include 'templates/footer.php'?>

        <!--JS files-->
        <script src="public/js/popper.js"></script>
        <script src="public/js/bootstrap.js"></script>
    </body>
</html>