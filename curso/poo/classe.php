<div class="titulo">Primeira classe</div>

<?php

class Cliente{
    //atributos
    public $nome = 'Anonimo';
    public $idade = 18;

    //metodos
    public function apresentar(){
        echo "Nome: {$this->nome}, idade: {$this->idade} <br>";
    }

}

$c1 = new Cliente();
$c1->nome = 'Paulo Santos';
$c1->idade = 45;


$c2 = new Cliente;
$c2->nome = 'Ana';
$c2->idade = 38;

$c1->apresentar();
$c2->apresentar();

?>
