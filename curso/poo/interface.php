<div class="titulo">Interface</div>

<?php 

interface Animal{
  public  function respirar();
}

interface Canino{
    public function ladrar();
}

class Cao implements Animal, Canino{
    function respirar(){
        return "vou usar Oxigenio";
    }

    function ladrar(){
        return "au au";
    }
 }
$animal = new Cao();
echo $animal->respirar(), '<br>';
echo $animal->ladrar().'<br>';

var_dump($animal);
echo "<br>";
var_dump($animal instanceof Cao);
