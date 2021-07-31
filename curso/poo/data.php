
<div class="titulo">Data</div>
<?php

    class Data{
        public $dia =1;
        public $mes =1;
        public $ano = 1970;

        public function apresentar(){
            return "{$this->dia}/{$this->mes}/{$this->ano}";
        }

    }

    $d1 = new Data();
    $d1->dia = 22;
    $d1->mes = 2;
    $d1->ano = 2021;

    $d2 = new Data();

    echo $d1->apresentar(), '<br>';
    echo $d2->apresentar();
