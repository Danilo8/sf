<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Relatórios | Search Food</title>

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

        <!--Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!--cdn Sweet Alert 2-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.25.0/sweetalert2.all.js"></script>
    </head>
    <body>
        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <section class="row text-center placeholders">
                <?php $array = array("top", "bottom", "left", "right"); ?>
                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Algoma Coisa<br>0%" style="padding-top: 5px;background-color: white" class="card text-success">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart text-white bg-success"></i>
                            </div>
                            <div style="padding-top: 10px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="text-truncate">
                                Algoma Coisa
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Algoma Coisa<br>0%" style="padding-top: 10px;color: white" class="card text-dark">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-dark text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Algoma Coisa
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0%" style="padding-top: 10px;color: white" class="card text-primary">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-primary text-white"></i>
                            </div>
                            <div style="padding-top: 5px;" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div data-html="true" data-toggle="tooltip" data-placement="<?= $array[rand(0, 3)] ?>" title="Alguma Coisa<br>0%" style="padding-top: 10px;color: white;" class="card text-danger">
                        <div class="media">
                            <div class="media-left meida media-middle">
                                <i style="font-size: 30px;margin-left: 10px;border-radius: 20%;padding: 10px;padding-right: 11px;padding-bottom: 8px;margin-bottom: 5px" class="fa fa-bar-chart bg-danger text-white"></i>
                            </div>
                            <div style="padding-top: 6px" class="media-body media-text-right">
                                <h3>0%</h3>
                            </div>
                        </div>
                        <div class="card-footer">
                            Alguma Coisa
                        </div>
                    </div>
                </div>
            </section>

            <div class="card mt-5">
                <div class="card-header">
                    GRÁFICO
                </div>
                <div class="card-body">
                    
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-7">
                    <div class="card">
                        <div class="card-header">
                            MAIS VENDIDOS
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            MAIS VENDIDO
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
            });
        </script>
    </body>
</html>