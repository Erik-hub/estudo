<?php

    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

            public function Andar(){
                echo "Andou";
            }
            public function Parar(){
                echo "Parou";
            }
    }
    class Carro extends Veiculo{
        public function ligarLimpador(){
            echo "ligado";
        }

    }
    class Moto extends Veiculo{
        public function cortarGiro(){
            echo "tchananananam";
        }
    }

$carro = new Carro();
$carro->modelo = "Uno";
$carro->cor = "Cinza";
$carro->ano = "2012";
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Kawazaki";
$moto->cor = "Verde";
$moto->ano = "2019";
$moto->Parar();
echo "<br>";
$moto->cortarGiro();
echo "<br>";
var_dump($moto);