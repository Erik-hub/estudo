<?php
class Teste{
    public $a;
    public $b;

    public function calcular($a, $b) {
        $this->a= new Teste();
        $this->b = new Teste();
    }
if ($a > $b) {
  echo "a is bigger than b";
  $b = $a;
}
else {
    echo "they are the same";
}


