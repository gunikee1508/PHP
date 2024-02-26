<?php

class Pessoa {
    public $nome; // atributo

    public function falar() { // método (funçao dentro de uma classe)
        return "O meu nome é ".$this->nome; // quero acessar meu proprio atributo nome. acessamos com o $this-> pra acessar uma informaçao dela, o this é a representaçao da nossa classe já instanciada, ou seja, o objeto. ATENÇÃO: dentro de um método, qualquer método, pra eu fazer referencia a um atributo que tá fora, devo usar $this->NOMEDOATRIBUTO. $this-> serve pra referenciar atributos e métodos dentro de métodos.
    }
} 

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel"; // referenciando um atributo, mesmo de fora, eu consigo acessar ele pq ele é publico
echo $glaucio->falar();

?>