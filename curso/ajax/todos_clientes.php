<?php 
 require "../bd/conexao.inc.php";
    $conexao = novaConexao();
    $sql = "SELECT id_cliente, nome FROM cliente ORDER BY nome";

    $stmt = $conexao->prepare($sql);
   
    $c = $stmt->execute();
    $clientes   = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($c) {
        echo json_encode($clientes, 128);
    }
    $conexao = null;
   



?>
