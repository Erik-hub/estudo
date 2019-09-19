<?php

    class Animal{
        public function Andar(){
            echo "o animal andou";
        }
        public function Correr(){
            echo "o animal correu";
        }
}
    class Cavalo extends Animal{
        public function Andar(){
            $this->Correr();
        }
}
$cavalo = new Cavalo();
$cavalo->Andar();
//reescrever o metodo da classe pai na classe filha.