<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard | Search Food</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="http://<?=DOMINIO?>/public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/navbar-style.css">
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/dashboard-template.css">

        <!-- Jquery and Bootstrap JS Script files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--fa fa-icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--cdn Sweet Alert 2-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    </head>
    <body>
        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <section class="row text-center placeholders">
                <?php $array = array("top", "bottom", "left", "right"); ?>
                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Meus Ganhos <br> R$ 0,00" style="padding-top: 5px;background-color: white" class="card text-success">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 35px;margin-left: 10px;border-radius: 20%;padding: 10px;margin-bottom: 3px" class="fa fa-money text-white bg-success"></i>
                            </div>
                            <div style="padding-top: 10px;" class="media-body media-text-right">
                                <h3 style="max-width: 180px;padding-left: 10px" class="text-truncate">R$ 0,00</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="text-truncate">
                                Meus Ganhos
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Número de Pedidos<br>0" style="padding-top: 10px;color: white" class="card text-dark">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 13px;margin-bottom: 3px" class="fa fa-shopping-cart bg-dark text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Número de Pedidos
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0" style="padding-top: 10px;color: white" class="card text-primary">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;margin-bottom: 3px" class="fa fa-line-chart bg-primary text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0" style="padding-top: 10px;color: white;" class="card text-warning">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-star bg-warning text-white"></i>
                            </div>
                            <div style="padding-top: 6px" class="media-body media-text-right">
                                <h3>0</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>
            </section>

            <div class="row mt-5">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            ALGUMA COISA
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="http://<?=DOMINIO?>/public/js/popper.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/bootstrap.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/valida-login.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });
        </script>
    </body>
</html>