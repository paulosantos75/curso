<div class="titulo">Contrutor/destrutor</div>

<?php 

class Pessoa{
    public $nome;
    public $idade;

    function __construct($n, $idade = 18)
    {
        echo 'Construtor invocado. <br>';
        $this->nome = $n;
        $this->idade = $idade;

    }

    function __destruct(){
         echo "objeto morto<br>";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoa = new Pessoa('Paulo Santos', 45);
$pessoa->apresentar();
unset($pessoa);

$pessoaB = new Pessoa('João Pedro');
$pessoaB->apresentar();
$pessoaB = null;