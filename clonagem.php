<?php

class Pessoa{

    public $idade;
}
$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
echo $pessoa2->idade;