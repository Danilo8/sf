<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cardápio</title>

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
        <link rel="stylesheet" href="http://<?=DOMINIO?>/public/css/scrollbar.css">

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
                <div class="col-4 mb-5">
                    <div class="card" id="category">
                        <div class="card-header">
                            <span>CATEGORIAS</span>
                            <button type="button" data-toggle="modal" data-target="#categoriaModal" data-tooltip="tooltip" data-placement="top" title="ADICIONAR CATEGORIA" style="float: right" class="btn btn-sm btn-success">
                                <i class="fa fa-plus-circle"></i>
                            </button>
                        </div>                        
                        <?php if ($category->Select($_SESSION['restaurant'])) { ?>
                            <div class="card-body p-0 scrollbar scrollbar-danger">
                                <?php $categories = $category->Select($_SESSION['restaurant']); ?>
                                <div class="list-group" id="list-tab" role="tablist">
                                    <?php for ($i=0; $i < mysqli_num_rows($categories); $i++) { ?>
                                        <?php $row_category = mysqli_fetch_assoc($categories); ?>
                                        <?php if($i == 0) {?>
                                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active" href="#<?= $row_category['id'] ?>" data-toggle="list" role="tab" aria-controls="<?= $row_category['category_name'] ?>">
                                                <div class="text-truncate">
                                                    <i id="arrows" class="fa fa-arrows text-muted"></i>
                                                    <?= $row_category['category_name'] ?>
                                                </div>    
                                            
                                                <!-- <i class="fa fa-phone"></i> -->
                                                <span data-tooltip="tooltip" data-placement="right" title="0 Item" class="badge badge-danger badge-pill">
                                                    0
                                                </span>                                                
                                            </a>
                                        <?php } else { ?>
                                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" href="#<?= $row_category['id'] ?>" data-toggle="list" role="tab" aria-controls="<?= $row_category['category_name'] ?>">
                                                <div class="text-truncate">
                                                    <i id="arrows" class="fa fa-arrows text-muted"></i>
                                                    <?= $row_category['category_name'] ?>
                                                </div>    
                                            
                                                <span data-tooltip="tooltip" data-placement="right" title="0 Item" class="badge badge-danger badge-pill">
                                                    0
                                                </span>                                                
                                            </a>
                                        <?php } ?>
                                    <?php } ?>  
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="card-body">
                                <p class="text-center text-muted mb-0">
                                    "Não há nenhuma Categoria cadastrada.
                                    Click do icone <i class="fa fa-plus-circle"></i>
                                    para adicionar uma nova Categoria."
                                </p>
                            </div>
                        <?php } ?>                                                     
                    </div>
                </div>
                <div class="col">
                    <div class="tab-content" id="nav-tabContent">
                        <?php if ($category->Select($_SESSION['restaurant'])) { ?>
                            <?php $categories = $category->Select($_SESSION['restaurant']); ?> 
                            <?php for ($i=0; $i < mysqli_num_rows($categories); $i++) { ?>
                                <?php $row_category = mysqli_fetch_assoc($categories); ?>
                                <?php if($i == 0) {?>
                                    <div class="tab-pane fade show active" id="<?= $row_category['id'] ?>" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="card">
                                            <div class="card-header">
                                                <button type="button" data-toggle="modal" data-target="#categoriaEditarModal" data-tooltip="tooltip" data-placement="top" title="EDITAR CATEGORIA" class="btn btn-sm p-0 text-success" style="background-color: transparent" data-category-id="<?= $row_category['id'] ?>" data-category-name="<?= $row_category['category_name'] ?>">
                                                    <i style="font-size: 22px" class="fa fa-pencil"></i>
                                                </button>
                                                <span style="color: black;"><?= $row_category['category_name'] ?></span>
                                                <button data-toggle="tooltip" data-placement="top" title="ADICIONAR ITEM" style="float: right" type="button" class="btn btn-sm btn-success">
                                                    <i class="fa fa-plus-circle"></i>
                                                    ADICIONAR ITEM
                                                </button>
                                            </div>                                        
                                            <?php if($menu->Select($_SESSION['restaurant'])){ ?>
                                                <div class="card-body">

                                                </div>
                                            <?php } else { ?>
                                                <div class="card-body">
                                                    <p class="text-center text-muted mb-0 px-5">
                                                        "Não há nenhum Item nessa Categoria.
                                                        Click no botão do canto superior direito
                                                        para adicionar um novo item nessa Categoria."                                                        
                                                    </p>
                                                </div>
                                            <?php } ?>                                        
                                            <div class="card-footer text-right">
                                                <button type="button" class="btn text-danger" style="background-color: transparent" data-toggle="modal" data-target="#categoriaExcluirModal" data-tooltip="tooltip" data-placement="bottom" title="EXCLUIR CATEGORIA" data-category-id="<?= $row_category['id'] ?>" data-category-name="<?= $row_category['category_name'] ?>">
                                                    EXCLUIR CATEGORIA
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="tab-pane fade" id="<?= $row_category['id'] ?>" role="tabpanel" aria-labelledby="list-home-list">
                                        <div class="card">
                                            <div class="card-header text-truncate">
                                                <button type="button" data-toggle="modal" data-target="#categoriaEditarModal" data-tooltip="tooltip" data-placement="top" title="EDITAR CATEGORIA" class="btn btn-sm p-0 text-success" style="background-color: transparent" data-category-id="<?= $row_category['id'] ?>" data-category-name="<?= $row_category['category_name'] ?>">
                                                    <i style="font-size: 22px" class="fa fa-pencil"></i>
                                                </button>
                                                <span style="color: black;max-width: 10%" class=""><?= $row_category['category_name'] ?></span>
                                                <button data-toggle="tooltip" data-placement="top" title="ADICIONAR ITEM" style="float: right" type="button" class="btn btn-sm btn-success">
                                                    <i class="fa fa-plus-circle"></i>
                                                    ADICIONAR ITEM
                                                </button>
                                            </div>
                                            <?php if($menu->Select($_SESSION['restaurant'])){ ?>
                                                <div class="card-body">
                                                </div>
                                            <?php } else { ?>
                                                <div class="card-body">
                                                    <p class="text-center text-muted  mb-0 px-5">
                                                        "Não há nenhum Item nessa Categoria.
                                                        Click no botão do canto superior direito
                                                        para adicionar um novo item nessa Categoria."                                                        
                                                    </p>
                                                </div>
                                            <?php } ?>
                                            <div class="card-footer text-right">
                                                <button type="button" class="btn text-danger" style="background-color: transparent" data-toggle="modal" data-target="#categoriaExcluirModal" data-tooltip="tooltip" data-placement="bottom" title="EXCLUIR CATEGORIA" data-category-id="<?= $row_category['id'] ?>" data-category-name="<?= $row_category['category_name'] ?>">
                                                    EXCLUIR CATEGORIA
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>                                 
                            <?php } ?>                                 
                            </div>
                        <?php } ?>                        
                    </div>                    
                </div>
            </div>
        </div>

        <!-- Modal para cadastrar Categorias -->
        <div class="modal fade" id="categoriaModal" tabindex="-1" role="dialog" aria-labelledby="categoriaModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoriaModalLabel">ADICIONAR CATEGORIA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                        
                            <div class="form-group">
                                <div class="label">Nome da Categoria:</div>
                                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Nome da Categoria" required>
                                <input type="hidden" name="<?= md5('category_action')?>" value="<?= md5('register_category')?>">
                                <input type="hidden" name="restaurant_id" value="<?= $_SESSION['restaurant'] ?>">
                            </div>                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                            <button type="submit" class="btn btn-success">ADICIONAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal para Editar Categorias -->
        <div class="modal fade" id="categoriaEditarModal" tabindex="-1" role="dialog" aria-labelledby="categoriaEditarModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="categoriaEditarModalLabel">EDITAR CATEGORIA</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                        
                            <div class="form-group">
                                <div class="label">Nome da Categoria:</div>
                                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Nome da Categoria" required value="">
                                <input type="hidden" name="<?= md5('category_action')?>" value="<?= md5('update_category')?>">
                                <input type="hidden" name="category_id" id="category_id" value="">
                                <input type="hidden" name="restaurant_id" value="<?= $_SESSION['restaurant'] ?>">                                
                            </div>                                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                            <button type="submit" class="btn btn-success">SALVAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal para Excluir Categorias -->
        <div class="modal fade" id="categoriaExcluirModal" tabindex="-1" role="dialog" aria-labelledby="categoriaExcluirModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="categoriaExcluirModalLabel">TEM CERTEZA QUE DESEJA EXCLUIR ESSA CATEGORIA?</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                        
                            <div class="form-group">
                                <div class="label">Nome da Categoria que será excluida:</div>
                                <input type="text" name="category_name" id="category_name" class="form-control" value="" readonly>
                                <input type="hidden" name="<?= md5('category_action')?>" value="<?= md5('delete_category')?>">
                                <input type="hidden" name="category_id" id="category_id" value="">
                                <input type="hidden" name="restaurant_id" value="<?= $_SESSION['restaurant'] ?>">                                
                            </div>                                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                            <button type="submit" class="btn btn-danger">EXCLUIR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--JS files-->
        <script src="http://<?=DOMINIO?>/public/js/popper.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/bootstrap.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/valida-login.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/modal.js"></script>
        <script src="http://<?=DOMINIO?>/public/js/scrolly.js"></script>
        <script type="text/javascript">
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                $('[data-tooltip="tooltip"]').tooltip()
            });
        </script>

        <!-- Alertas -->
        <?php if (isset($route->Link)) { ?>
            <?php $msg = $route->Link; ?>
            <?php if ($msg == "categoria-adicionada-com-sucesso") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'success',
                        showConfirmButton: false,
                        title: 'Categoria adicionada com sucesso!',
                        timer: 1500,
                    })
                </script>
            <?php } else if ($msg == "erro-ao-adicionada-categoria") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'error',
                        showConfirmButton: false,
                        title: 'Erro ao adicionar categoria!',
                        timer: 2000,
                    })
                </script>
            <?php } else if ($msg == "categoria-ja-existe") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'error',
                        showConfirmButton: false,
                        title: 'Essa categoria já existe!',
                        timer: 2000,
                    })
                </script>
            <?php } else if ($msg == "categoria-editada-com-sucesso") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'success',
                        showConfirmButton: false,
                        title: 'Categoria editada com sucesso!',
                        timer: 1500,
                    })
                </script>
            <?php } else if ($msg == "categoria-excluida-com-sucesso") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'success',
                        showConfirmButton: false,
                        title: 'Categoria excluida com sucesso!',
                        timer: 1500,
                    })
                </script>
            <?php } else if ($msg == "categoria-possui-itens") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'info',
                        showConfirmButton: false,
                        title: 'Essa categoria possue Itens cadastrados, você precisa remove-los antes!',
                        timer: 5000,
                    })
                </script>
            <?php } else if ($msg == "erro-ao-excluir-categoria") { ?>
                <script type='text/javascript'>
                    swal({
                        type: 'error',
                        showConfirmButton: false,
                        title: 'Erro ao tentar excluir a categoria!',
                        timer: 1500,
                    })
                </script>
            <?php } ?>
        <?php } ?>
    </body>
</html>