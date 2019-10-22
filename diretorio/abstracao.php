<?php

abstract class Banco{
        protected $saldo;
        protected $limiteSaque;
        protected $juros;
        protected $deposito;
        protected $saque;
        
        public function setSaldo($s){
            $this->saldo = $s;
        }
        public function getSaldo(){
            return $this->saldo;
        }

        public function setDeposito($d){
            $this->deposito = $d;
        }
        public function getDeposito(){
            return $this->deposito;
        }

        public function setSaque($s){
            $this->saque = $s;
        }
        public function getSaque(){
            return $this->saque;
        }


        abstract protected function Sacar($s);
        abstract protected function Depositar($d);   
}

    class Bradesco extends Banco{

        public function Sacar($s){
        $this->saque = $s;
        $this->saldo -= $s;
    }
        public function Depositar($d){
        $this->deposito = $d;
        $this->saldo += $d;
    }
}
$bradesco = new Bradesco();
$bradesco->setSaldo(1000);
echo "<hr> Saldo:".$bradesco->getSaldo();
$bradesco->Sacar(250);
echo "<hr> Saque feito de: " . $bradesco->getSaque();
echo "<hr> Novo saldo:".$bradesco->getSaldo();
$bradesco->Depositar(250);

echo "<hr> Deposito feito de: " . $bradesco->getDeposito();
echo "<hr> Seu saldo após o deposito é de:".$bradesco->getSaldo();

