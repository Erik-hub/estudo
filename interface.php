<?php

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();

}
class Noticias implements Crud{
    public function create() {
        //logica para criar uma noticia
    }
    public function read() {
        //logica para ler uma noticia
    }
    public function update() {
        //logica para atualizar uma noticia
    }
    public function delete() {
        //logica para deletar uma noticia
    }
}
// interface serve para que uma classe que implemente seja obrigada a ter seus metodos.
// os atributos da classe pai tem que ser publicos.
// quem faz todas as funçoes é a classe que implementa a interface.
