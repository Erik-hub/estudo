<?php

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}


class Carrinho{
    public $carrinhoDeProdutos = [];
    // $carrinhoDeProdutos é um array;
    public function adiciona(Produtos $x){
        //colocando o produto passado $x dentro do $carrinhoDeProdutos
        array_push($this->carrinhoDeProdutos, $x);
    }

    public function exibe(){
        foreach($this->carrinhoDeProdutos as $produto){
            echo $produto->nome. '<br>';
            echo $produto->valor. '<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "250");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();