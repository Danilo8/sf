<?php
/**
 * ------------------------------------------------------------
 * Classe que faz a gestão de Links e URL amigaveis
 * incluindo numeros de paginação, pastas, arquivos e links
 * ------------------------------------------------------------
 */
class Routes
{
    public $Local;
    public $Path;
    public $File;
    public $Link;

    /**
     * 
     */
    public function __construct()
    {
        $this->Local = strip_tags(filter_input(INPUT_GET, 'page', FILTER_DEFAULT));
        $this->Local = ($this->Local ? $this->Local: 'home');
        $this->Local = explode('/', $this->Local);
        $this->checkLink();
    }

    /**
     * ------------------------------------------------------------
     * Função que testa o Link
     * ------------------------------------------------------------
     */
    private function checkLink()
    {
        // Verifica de o Indice [1] não é um numero de paginação
        if (!preg_match('/^[0-9]*$/', $this->Local[0])) {

            // Verifica se o ultimo indice do Local é um arquivo PHP
            if (!file_exists(REQ . '/views/' . end($this->Local) . '.php')) {
                
                // Verifica se o arquivo PHP do indice [0] não existe
                if (!file_exists(REQ . '/views/' . $this->Local[0]. '.php')) {
                    
                    // Verifica se o indice [1] do Local foi setado ou não esta vazio
                    if (isset($this->Local[1]) && !empty($this->Local[1])) {
                        
                        // Verifica se o indece [1] não é um numero de paginação
                        if (!preg_match('/^[0-9]*$/', $this->Local[1])) {
                            
                            //Verifica se o arquivo PHP no indice [1] existe
                            if (file_exists(REQ . '/views/' . $this->Local[0] . '/' . $this->Local[1] . '.php')) {
                                
                                $this->Path = $this->Local[0];
                                $this->File = $this->Local[1];
                                $this->Link = (isset($this->Local[2]) ? $this->Local[2] : null);
                            } else {
                                
                                // Entra aqui se o arquivo PHP do indice [1] não existir
                                $this->Path = null;
                                $this->File = 'error/404';
                                $this->Link = (isset($this->Local[2]) ? $this->Local[2] : null);
                            }
                            
                        }
                        
                    } else {
                        
                        // Verifica se o arquivo PHP do indice [0] existe
                        if (file_exists(REQ . '/views/' . $this->Local[0] . 'home.php')) {
                                $this->Path = $this->Local[0];
                                $this->File = $this->Local[1];
                                $this->Link = (isset($this->Local[2]) ? $this->Local[2] : null);
                        } else {
                                $this->Path = null;
                                $this->File = 'error/404';
                                $this->Link = (isset($this->Local[2]) ? $this->Local[2] : null);
                        }
                        
                    }
                    
                } else {
                    
                    // Entra aqui se o arquivo do indice [0] existir
                    $this->Path = null;
                    $this->File = $this->Local[0];
                    $this->Link = (isset($this->Local[0]) ? $this->Local : null);
                }
                
            } else {
                
                // Entra aqui se o arquivo do ultimo indice existir
                $this->Pach = null; $this->File = end($this->Local);
            }
            
        } else {

            // Entra aqui se o indice [0] for um numero de paginação

            $this->Path = null;

            if ($this->Local[0] != '404') {
                $this->File = 'home';
                $this->Link = (isset($this->Local[0]) ? $this->Local : null);
            } else {
                $this->File = 'error/404';
                $this->Link = null;
            }
            
        }

        if ($this->Local[0] == 'entrar') {
            $this->File = 'user/entrar';
            $this->Link = (isset($this->Local[0]) ? $this->Local : null);
        }
        
    }
}
