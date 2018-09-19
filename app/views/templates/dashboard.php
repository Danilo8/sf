<?php 
     use app\Controllers\RestaurantController;
     use app\Controllers\CategoriesController;

     $restaurant = new RestaurantController();
     $category = new CategoriesController();

     if(!isset($_SESSION['restaurant'])){
        $restaurant->redirect('http://'.DOMINIO.'/restaurante/login/usuario-nao-autenticado');
     }

     if(isset($route->Link) && $route->Link == 'logout'){
        $restaurant->close_session('restaurant');
     }
?>
<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <img height="55" src="http://<?=DOMINIO?>/public/img/logo/logo.png" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">
            <?= $restaurant->Select('restaurant_name'); ?>
        </h3>
    </ul>
    <ul class="nav justify-content-end">
        <?php include 'app/views/templates/notificacoes.php' ?>
        
        <span class="nav-item">
            <button style="border: none" type="button" class="nav-link btn btn-link" data-toggle="modal" data-target="#logoutModal">
                <span style="font-size: 18px" id="logout" class="mx-4">
                    Sair
                    <i class="fa fa-sign-out"></i>                
                </span>
            </button>
        </span>
    </ul>
</nav>
<nav class="navbar navbar-danger">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <?php if($route->File == "dashboard") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/restaurante/dashboard">DASHBOARD</a>           
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/restaurante/dashboard">DASHBOARD</a>           
            <?php } ?>
        </li>
        <li class="nav-item">
            <?php if($route->File == "pedidos") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/restaurante/pedidos">PEDIDOS</a>
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/restaurante/pedidos">PEDIDOS</a>
            <?php } ?>
        </li>
        <li class="nav-item">
            <?php if($route->File == "cardapio") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/restaurante/cardapio">CARDÁPIO</a>         
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/restaurante/cardapio">CARDÁPIO</a>         
            <?php } ?>
        </li>
        <li class="nav-item border">
        </li>
        <li class="nav-item">
            <?php if($route->File == "administrador") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/restaurante/administrador">ADMINISTRADOR</a>           
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/restaurante/administrador">ADMINISTRADOR</a>           
            <?php } ?>
        </li>
        <li class="nav-item">
            <?php if($route->File == "relatorios") { ?>
                <a class="nav-link active" href="http://<?=DOMINIO?>/restaurante/relatorios">RELATÓRIOS</a>           
            <?php } else { ?>
                <a class="nav-link" href="http://<?=DOMINIO?>/restaurante/relatorios">RELATÓRIOS</a>           
            <?php } ?>
        </li>
    </ul>
    <span></span>
</nav>

<!-- Modal Sair-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Tem certeza que deseja sair?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a href="<?=$_SERVER['REQUEST_URI']?>/logout" class="btn btn-danger">Sair</a>
        </div>
        </div>
    </div>
</div>