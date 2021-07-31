<?php 

// var_dump($_POST);
//- executar os calculos dos pedidos pelo request do Ajax
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$operacao = $_POST['operacao'];

switch ($operacao) {
    case 'adicao':
        echo "$p1 + $p2 = ".($p1 + $p2);
        break;
    case 'subtracao':
        echo "$p1 - $p2 = ".($p1 - $p2);
        break;
    case 'multiplicacao':
        echo "$p1 x $p2 = ".($p1 * $p2);
        break;
    case 'divisao':
        echo "$p1 : $p2 = ".($p1 / $p2);
        break;
    
    default:
        echo "Operação inválida.";
        break;
}


?>