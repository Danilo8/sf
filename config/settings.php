<?php

namespace config;

class Settings
{
    public function __construct()
    {
        error_reporting(E_ALL ^ E_NOTICE);
        ini_set('display_errors', 1);

        define('HOST', 'localhost');    //definindo o Servidor
        define('USER', 'root');         //definindo o Usuário
        define('PASSWORD', '');         //definindo a Senha
        define('DB', 'db_searchfood');  //definindo o Banco de Dados 

        //Definindo o Timezone do PHP para o horário do Brasil
        date_default_timezone_set('America/Sao_Paulo');
    }
}

