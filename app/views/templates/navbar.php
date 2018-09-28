<nav id="template-navbar" class="navbar navbar-expand-lg navbar-light">
    <?php if ($route->Path == 'restaurante') { ?>
        <a class="navbar-brand" href="http://<?=DOMINIO?>">
            <img height="55" src="http://<?=DOMINIO?>/public/img/logo/logo.png" alt="Logo">
            <span id="logo-text">Search Food</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <div class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link">
                        Sobre
                    </span>                                       
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="http://<?=DOMINIO?>/sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="http://<?=DOMINIO?>/termos">Termos de Uso</a>
                        <a class="dropdown-item" href="http://<?=DOMINIO?>/privacidade">Privacidade</a>
                    </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link text-white" href="http://<?=DOMINIO?>/contato">Contato</a>                
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://<?=DOMINIO?>/entrar">Entrar ou Cadastrar</a>
                </li>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link active text-white">
                        Donos de Restaurante
                    </span>                                    
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="http://<?=DOMINIO?>/restaurante/cadastro">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="http://<?=DOMINIO?>/restaurante/login">Acessar Painel</a>
                    </div>
                </div>
            </ul>
        </div>
    <?php } else { ?>
        <a class="navbar-brand" href="http://<?=DOMINIO?>">
            <img height="55" src="public/img/logo/logo.png" alt="Logo">
            <span id="logo-text">Search Food</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <div class="dropdown nav-item">
                    <?php if ($route->File == 'sobre' || $route->File == 'termos' || $route->File == 'privacidade') { ?>
                        <span style="cursor: pointer" class="nav-link active text-white">
                            Sobre
                        </span> 
                    <?php } else { ?>
                        <span style="cursor: pointer" class="nav-link">
                            Sobre
                        </span> 
                    <?php } ?>
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="termos">Termos de Uso</a>
                        <a class="dropdown-item" href="privacidade">Privacidade</a>
                    </div>
                </div>
                <li class="nav-item">
                    <?php if ($route->File == 'contato') { ?>
                        <a class="nav-link text-white active" href="contato">Contato</a>
                    <?php } else { ?>
                        <a class="nav-link text-white" href="contato">Contato</a>
                    <?php } ?>                                    
                </li>
                <li class="nav-item">
                    <?php if ($route->File == 'user/entrar') { ?>
                        <a class="nav-link text-white active" href="entrar">Entrar ou Cadastrar</a>
                    <?php } else { ?>
                        <a class="nav-link text-white" href="entrar">Entrar ou Cadastrar</a>
                    <?php } ?> 
                </li>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link">
                        Donos de Restaurante
                    </span>                                    
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="restaurante/cadastro">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="restaurante/login">Acessar Painel</a>
                    </div>
                </div>
            </ul>
        </div>
    <?php } ?>
</nav>