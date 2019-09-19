<?php
//classse
class Login {
  //atributos
  private $email;
  private $senha;
    //metodos (get, set e metodo de Logar)
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($e){
      $email = filter_var($e, FILTER_VALIDATE_EMAIL);
      $this->email = $email;
    }
    public function getSenha(){
      return $this->senha;
    }
    public function setSenha($s){
      $this->senha = $s;
    }
    public function Logar(){
      if($this->email and $this->email = 'teste@gmail.com' and $this->senha == "123456")
        echo "Logado com sucesso";
      else
        echo "Dados inválidos";

    }
}
//instanciar objeto
$logar = new Login();
//como o setEmail e setSenha tem parametros, posso setar daqui
$logar->setEmail("teste@gmail.com");
$logar->setSenha("123456");
//executando função logar
$logar->Logar();
//se caso nao funcionar, ou se quiser checar o que está passando, usar var_dump(); e passando o objeto desejado nos parametros para descobrir.
echo "<br>";
var_dump($logar);
?>