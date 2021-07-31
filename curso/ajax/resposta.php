<?php 

//    $nomes = array(
//        'Joao',
//        'Ana',
//        'Carlos'
//    );
    $nomes = array(
        array(
            'nome'=>'Joao',
            'apelido'=>'Ribeiro'
        ),
        array(
            'nome'=>'Paulo',
            'apelido'=>'Santos'
        ),
        array(
            'nome'=>'Isabel',
            'apelido'=>'Silva'
        )
    );
   echo json_encode($nomes);
?>