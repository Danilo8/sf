<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cardápio | Search Food</title>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <!--Favicon-->
        <link rel="shortcut icon" href="../public/img/icon/SF.ico" type="image/x-icon">

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--CSS files-->
        <link rel="stylesheet" href="../public/css/navbar-style.css">
        <link rel="stylesheet" href="../public/css/dashboard-template.css">

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
        <?php include 'app/views/templates/dashboard.php'?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <span>CATEGORIA</span>
                            <button type="button" data-toggle="modal" data-target="#categoriaModal" data-tooltip="tooltip" data-placement="top" title="ADICIONAR CATEGORIA" style="float: right" class="btn btn-sm btn-success">
                                <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <?php if ($categories->Select($_SESSION['restaurant'])) { ?>
                                Sim
                            <?php } else { ?>
                                <p class="text-center text">
                                    Não
                                </p>
                            <?php } ?>                             
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <span>CATEGORIA</span>
                            <button data-toggle="tooltip" data-placement="top" title="ADICIONAR ITEM" style="float: right" type="button" class="btn btn-sm btn-success">
                                <i class="fa fa-plus-circle"></i>
                                ADICIONAR ITEM
                            </button>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para cadastrar Categorias -->
        <div class="modal fade" id="categoriaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
                $('[data-tooltip="tooltip"]').tooltip()
            });
        </script>
    </body>
</html>