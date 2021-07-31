<div class="titulo">Membros Estáticos</div>
<?php 

class A{
    public $naoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de classe (estatica)';

    public function mostrarA(){
        echo "Não estatica: {$this->naoStatic}<br>";
        echo "Estática: ". self::$static . "<br>";
    }
    public static function mostraEstatica(){
        echo "Estatica: ". self::$static . "<br>";
    }

}

// $objA = new A();
// $objA->mostrarA();

echo A::$static .'<br>'; //forma ideal de aceder a uma variavel de classe

A::mostraEstatica();

A::$static = 'Alterado membro de classe';
echo A::$static .'<br>';