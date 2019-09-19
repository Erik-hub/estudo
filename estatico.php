<?php

class Login {
    public static $user;

        public static function verificaLogin(){
            echo "o usuario ".self::$user." está logado!";
        }
        public function sairSistema(){
            echo "O usuario deslogou";
        } 
}

Login::$user = "admin";
Login::verificaLogin();
$login = new Login();
$login->sairSistema();
// self voce usa pra acessar propriedades e metodos estaticos
// :: serve para acessar propriedades ou metodos estaticos de uma classe
// ou seja, os dois sao pra acessar, mas de diferentes modos
 