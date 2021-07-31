<div class="titulo">Herança</div>

<?php 
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Objeto Pessoa criado.<br>";
    }

    function __destruct()
    {
        echo 'Apaga o objeto Pessoa';
    }
    public function apresentar(){
        return "{$this->nome}, {$this->idade} anos";
    }
}

class Utilizador extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;

    }
    function __destruct(){
        echo 'Apaga o objeto Utilizador';
    }
   
    public function apresentar(){
        //return "@{$this->login}: {$this->nome}, {$this->idade} anos";
        return "@{$this->login}:  " . parent::apresentar();
    }
}

$utilizador = new Utilizador('Gustavo Mendonça', 21, 'gustavo');
echo $utilizador->apresentar();
echo '<br>';
unset($utilizador);